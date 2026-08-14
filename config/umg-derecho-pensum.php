<?php

return [
    'eyebrow' => 'Plan de estudios',
    'title' => 'Pensum de la carrera',
    'lead' => 'Un recorrido por los ciclos formativos: de los fundamentos jurídicos al ejercicio profesional.',

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
                        'Introducción al Derecho',
                        'Sociología Jurídica',
                        'Teoría del Estado',
                        'Lógica Jurídica',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Historia del Derecho',
                        'Derecho Romano',
                        'Economía Política',
                        'Técnicas de Investigación',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-2',
            'number' => '02',
            'label' => 'Ciclo II',
            'title' => 'Derecho privado',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Derecho Civil I',
                        'Obligaciones y Contratos',
                        'Derecho de Personas',
                        'Derecho de Familia',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Derecho Civil II',
                        'Derecho Mercantil',
                        'Títulos de Crédito',
                        'Derecho Sucesorio',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-3',
            'number' => '03',
            'label' => 'Ciclo III',
            'title' => 'Público y penal',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Derecho Constitucional',
                        'Derecho Penal I',
                        'Derechos Humanos',
                        'Teoría del Delito',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Derecho Penal II',
                        'Derecho Administrativo',
                        'Derecho Tributario',
                        'Derecho Internacional Público',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-4',
            'number' => '04',
            'label' => 'Ciclo IV',
            'title' => 'Proceso y práctica',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Derecho Procesal Civil',
                        'Derecho Laboral',
                        'Argumentación Jurídica',
                        'Medios de Impugnación',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Derecho Procesal Penal',
                        'Práctica Forense',
                        'Derecho Procesal Laboral',
                        'Oratoria Forense',
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
                        'Derecho Notarial',
                        'Derecho Registral',
                        'Ética Profesional',
                        'Filosofía del Derecho',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Metodología de la Investigación',
                        'Seminario de Graduación',
                        'Clínica Jurídica',
                        'Ejercicio Profesional Supervisado',
                    ],
                ],
            ],
        ],
    ],
];
