<?php

return [
    'eyebrow' => 'Plan de estudios',
    'title' => 'Pensum de la carrera',
    'lead' => 'Un recorrido por los ciclos formativos: de los fundamentos sociales a la intervención profesional.',

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
                        'Introducción al Trabajo Social',
                        'Sociología General',
                        'Psicología General',
                        'Comunicación Social',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Historia Social de Guatemala',
                        'Antropología Social',
                        'Filosofía Social',
                        'Métodos de Investigación',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-2',
            'number' => '02',
            'label' => 'Ciclo II',
            'title' => 'Contextos sociales',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Teoría del Trabajo Social',
                        'Derechos Humanos',
                        'Legislación Social',
                        'Estadística Social',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Políticas Sociales',
                        'Interculturalidad',
                        'Desarrollo Humano',
                        'Ética Profesional',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-3',
            'number' => '03',
            'label' => 'Ciclo III',
            'title' => 'Intervención',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Intervención Individual y Familiar',
                        'Trabajo Social Grupal',
                        'Diagnóstico Social',
                        'Mediación de Conflictos',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Desarrollo Comunitario',
                        'Acompañamiento Psicosocial',
                        'Inclusión Social',
                        'Práctica Supervisada I',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-4',
            'number' => '04',
            'label' => 'Ciclo IV',
            'title' => 'Gerencia social',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Gerencia Social',
                        'Formulación de Proyectos',
                        'Evaluación de Impacto',
                        'Sistema de Protección Social',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Gestión de Organizaciones',
                        'Investigación Aplicada',
                        'Políticas Públicas',
                        'Práctica Supervisada II',
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
                        'Ejercicio Técnico Supervisado',
                        'Innovación Social',
                        'Docencia Social',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Seminario de Graduación II',
                        'Trabajo de Graduación',
                        'Ética y Responsabilidad Social',
                        'Ejercicio Profesional Supervisado',
                    ],
                ],
            ],
        ],
    ],
];
