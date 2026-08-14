<?php

return [
    'eyebrow' => 'Plan de estudios',
    'title' => 'Pensum de la carrera',
    'lead' => 'Un recorrido por los ciclos formativos: de los fundamentos criminológicos al ejercicio profesional.',

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
                        'Introducción a la Criminología',
                        'Sociología General',
                        'Psicología General',
                        'Métodos de Investigación',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Teorías Criminológicas',
                        'Derecho Penal I',
                        'Victimología',
                        'Estadística Social',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-2',
            'number' => '02',
            'label' => 'Ciclo II',
            'title' => 'Delito y sociedad',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Psicología Criminal',
                        'Derecho Penal II',
                        'Sociología Jurídica',
                        'Política Criminal I',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Criminalística I',
                        'Medicina Forense Básica',
                        'Derechos Humanos',
                        'Análisis de Conducta',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-3',
            'number' => '03',
            'label' => 'Ciclo III',
            'title' => 'Investigación',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Criminalística II',
                        'Investigación Criminal',
                        'Perfilación Criminológica',
                        'Cadena de Custodia',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Política Criminal II',
                        'Prevención del Delito',
                        'Seguridad Ciudadana',
                        'Criminometría',
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
                        'Criminalística Avanzada',
                        'Forense Digital',
                        'Mediación y Conflictos',
                        'Ética Profesional',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Reinserción Social',
                        'Seguridad Pública',
                        'Análisis de Riesgos',
                        'Casos Prácticos',
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
                        'Investigación Aplicada',
                        'Políticas de Seguridad',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Seminario de Graduación II',
                        'Proyecto de Investigación',
                        'Docencia y Asesoría',
                        'Ejercicio Profesional Supervisado',
                    ],
                ],
            ],
        ],
    ],
];
