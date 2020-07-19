<?php

namespace App\DataFixtures;

use App\Entity\Commune;
use App\Entity\Province;
use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listArray = json_decode(file_get_contents(__DIR__ . '/source.json'), true);

        foreach ($listArray as $regionData) {
            $region = new Region();
            $region->setName($regionData['region']);
            $manager->persist($region);

            foreach ($regionData['provincias'] as $provinceData) {
                $province = new Province();
                $province->setName($provinceData['name']);

                $region->addProvince($province);
                $manager->persist($province);

                foreach ($provinceData['comunas'] as $communeData) {
                    $commune = new Commune();
                    $commune->setName($communeData['name']);
                    $commune->setProvince($province);

                    $province->addCommune($commune);
                    $manager->persist($commune);
                }
            }
        }

        $manager->flush();
    }
}
