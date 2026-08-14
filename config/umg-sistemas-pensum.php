<?php

return [
    'eyebrow' => 'Plan de estudios',
    'title' => 'Pensum de la carrera',
    'lead' => 'Un recorrido por los ciclos formativos: de los fundamentos de programación al ejercicio profesional en tecnología.',

    'cycles' => [
        [
            'id' => 'ciclo-1',
            'number' => '01',
            'label' => 'Ciclo I',
            'title' => 'Fundamentos',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Introducción a la Programación',
                        'Matemática Discreta',
                        'Álgebra Lineal',
                        'Comunicación Técnica',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Programación Orientada a Objetos',
                        'Cálculo',
                        'Lógica de Sistemas',
                        'Arquitectura de Computadoras',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-2',
            'number' => '02',
            'label' => 'Ciclo II',
            'title' => 'Estructuras y datos',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Estructura de Datos',
                        'Bases de Datos I',
                        'Sistemas Operativos I',
                        'Estadística Aplicada',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Algoritmos Avanzados',
                        'Bases de Datos II',
                        'Sistemas Operativos II',
                        'Redes de Computadoras I',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-3',
            'number' => '03',
            'label' => 'Ciclo III',
            'title' => 'Software y redes',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Ingeniería de Software I',
                        'Desarrollo Web',
                        'Redes de Computadoras II',
                        'Análisis de Sistemas',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Ingeniería de Software II',
                        'Programación Móvil',
                        'Telecomunicaciones',
                        'Seguridad Informática',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-4',
            'number' => '04',
            'label' => 'Ciclo IV',
            'title' => 'Especialización',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Inteligencia Artificial',
                        'Cloud Computing',
                        'Gestión de Proyectos TI',
                        'Arquitectura de Software',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Ciencia de Datos',
                        'DevOps y Automatización',
                        'Ciberseguridad',
                        'Ética Profesional TI',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-5',
            'number' => '05',
            'label' => 'Ciclo V',
            'title' => 'Ejercicio profesional',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Seminario de Graduación I',
                        'Práctica Profesional',
                        'Proyectos Empresariales',
                        'Innovación Tecnológica',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Seminario de Graduación II',
                        'Proyecto de Investigación',
                        'Consultoría TI',
                        'Ejercicio Profesional Supervisado',
                    ],
                ],
            ],
        ],
    ],
];
