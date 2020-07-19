# Test

## Requisitos

    docker
    docker-compose

## Puertos Utilizados

    mysql 3306
    nginx 80

## Pasos para probar

    docker-compose up -d --build --remove-orphans
    docker-compose exec php php bin/console doctrine:migrations:migrate
    docker-compose exec php php bin/console doctrine:fixtures:load

## Petición

    curl --location --request POST 'localhost/communes' \
        --form 'filter[]=Región Metropolitana de Santiago' \
        --form 'filter[]=Concepción'

## Respuesta

```
[
    [
        {
            "id": 16,
            "name": "Región Metropolitana de Santiago",
            "provinces": [
                {
                    "id": 51,
                    "name": "Santiago",
                    "communes": [
                        {
                            "id": 295,
                            "name": "Santiago"
                        },
                        {
                            "id": 296,
                            "name": "Cerrillos"
                        },
                        {
                            "id": 297,
                            "name": "Cerro Navia"
                        },
                        {
                            "id": 298,
                            "name": "Conchalí"
                        },
                        {
                            "id": 299,
                            "name": "El Bosque"
                        },
                        {
                            "id": 300,
                            "name": "Estación Central"
                        },
                        {
                            "id": 301,
                            "name": "Huechuraba"
                        },
                        {
                            "id": 302,
                            "name": "Independencia"
                        },
                        {
                            "id": 303,
                            "name": "La Cisterna"
                        },
                        {
                            "id": 304,
                            "name": "La Florida"
                        },
                        {
                            "id": 305,
                            "name": "La Granja"
                        },
                        {
                            "id": 306,
                            "name": "La Pintana"
                        },
                        {
                            "id": 307,
                            "name": "La Reina"
                        },
                        {
                            "id": 308,
                            "name": "Las Condes"
                        },
                        {
                            "id": 309,
                            "name": "Lo Barnechea"
                        },
                        {
                            "id": 310,
                            "name": "Lo Espejo"
                        },
                        {
                            "id": 311,
                            "name": "Lo Prado"
                        },
                        {
                            "id": 312,
                            "name": "Macul"
                        },
                        {
                            "id": 313,
                            "name": "Maipú"
                        },
                        {
                            "id": 314,
                            "name": "Ñuñoa"
                        },
                        {
                            "id": 315,
                            "name": "Pedro Aguirre Cerda"
                        },
                        {
                            "id": 316,
                            "name": "Peñalolén"
                        },
                        {
                            "id": 317,
                            "name": "Providencia"
                        },
                        {
                            "id": 318,
                            "name": "Pudahuel"
                        },
                        {
                            "id": 319,
                            "name": "Quilicura"
                        },
                        {
                            "id": 320,
                            "name": "Quinta Normal"
                        },
                        {
                            "id": 321,
                            "name": "Recoleta"
                        },
                        {
                            "id": 322,
                            "name": "Renca"
                        },
                        {
                            "id": 323,
                            "name": "San Joaquín"
                        },
                        {
                            "id": 324,
                            "name": "San Miguel"
                        },
                        {
                            "id": 325,
                            "name": "San Ramón"
                        },
                        {
                            "id": 326,
                            "name": "Vitacura"
                        }
                    ]
                },
                {
                    "id": 52,
                    "name": "Cordillera",
                    "communes": [
                        {
                            "id": 327,
                            "name": "Puente Alto"
                        },
                        {
                            "id": 328,
                            "name": "Pirque"
                        },
                        {
                            "id": 329,
                            "name": "San José de Maipo"
                        }
                    ]
                },
                {
                    "id": 53,
                    "name": "Chacabuco",
                    "communes": [
                        {
                            "id": 330,
                            "name": "Colina"
                        },
                        {
                            "id": 331,
                            "name": "Lampa"
                        },
                        {
                            "id": 332,
                            "name": "Tiltil"
                        }
                    ]
                },
                {
                    "id": 54,
                    "name": "Maipo",
                    "communes": [
                        {
                            "id": 333,
                            "name": "San Bernardo"
                        },
                        {
                            "id": 334,
                            "name": "Buin"
                        },
                        {
                            "id": 335,
                            "name": "Calera de Tango"
                        },
                        {
                            "id": 336,
                            "name": "Paine"
                        }
                    ]
                },
                {
                    "id": 55,
                    "name": "Mellipilla",
                    "communes": [
                        {
                            "id": 337,
                            "name": "Melipilla"
                        },
                        {
                            "id": 338,
                            "name": "Alhué"
                        },
                        {
                            "id": 339,
                            "name": "Curacaví"
                        },
                        {
                            "id": 340,
                            "name": "María Pinto"
                        },
                        {
                            "id": 341,
                            "name": "San Pedro"
                        }
                    ]
                },
                {
                    "id": 56,
                    "name": "Talagante",
                    "communes": [
                        {
                            "id": 342,
                            "name": "Talagante"
                        },
                        {
                            "id": 343,
                            "name": "El Monte"
                        },
                        {
                            "id": 344,
                            "name": "Isla de Maipo"
                        },
                        {
                            "id": 345,
                            "name": "Padre Hurtado"
                        },
                        {
                            "id": 346,
                            "name": "Peñaflor"
                        }
                    ]
                }
            ]
        }
    ],
    [
        {
            "id": 32,
            "name": "Concepción",
            "communes": [
                {
                    "id": 167,
                    "name": "Concepción"
                },
                {
                    "id": 168,
                    "name": "Coronel"
                },
                {
                    "id": 169,
                    "name": "Chiguayante"
                },
                {
                    "id": 170,
                    "name": "Florida"
                },
                {
                    "id": 171,
                    "name": "Hualqui"
                },
                {
                    "id": 172,
                    "name": "Lota"
                },
                {
                    "id": 173,
                    "name": "Penco"
                },
                {
                    "id": 174,
                    "name": "San Pedro de la Paz"
                },
                {
                    "id": 175,
                    "name": "Santa Juana"
                },
                {
                    "id": 176,
                    "name": "Talcahuano"
                },
                {
                    "id": 177,
                    "name": "Tomé"
                },
                {
                    "id": 178,
                    "name": "Hualpén"
                }
            ]
        }
    ]
]
```
