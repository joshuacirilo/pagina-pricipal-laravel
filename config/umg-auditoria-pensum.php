<?php

return [
    'eyebrow' => 'Plan de estudios',
    'title' => 'Pensum de la carrera',
    'lead' => 'Un recorrido por los ciclos formativos: de los fundamentos contables al ejercicio profesional de la auditoría.',

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
                        'Contabilidad I',
                        'Matemáticas Financieras',
                        'Introducción a la Auditoría',
                        'Comunicación Profesional',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Contabilidad II',
                        'Economía General',
                        'Estadística Aplicada',
                        'Derecho Mercantil Básico',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-2',
            'number' => '02',
            'label' => 'Ciclo II',
            'title' => 'Contabilidad avanzada',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Contabilidad de Costos',
                        'Contabilidad Superior I',
                        'Legislación Tributaria I',
                        'Análisis de Estados Financieros',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Contabilidad Superior II',
                        'Presupuestos',
                        'Legislación Tributaria II',
                        'Sistemas de Información Contable',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-3',
            'number' => '03',
            'label' => 'Ciclo III',
            'title' => 'Normas y control',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'NIIF / NIA Fundamentos',
                        'Control Interno',
                        'Auditoría Financiera I',
                        'Ética Profesional',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Auditoría Financiera II',
                        'Gestión de Riesgos',
                        'Auditoría Gubernamental',
                        'Finanzas Corporativas',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-4',
            'number' => '04',
            'label' => 'Ciclo IV',
            'title' => 'Auditoría aplicada',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Auditoría de Sistemas',
                        'Auditoría Interna',
                        'Consultoría Empresarial',
                        'Tributación Avanzada',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Auditoría Externa',
                        'Gobierno Corporativo',
                        'Informes de Auditoría',
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
                        'Auditoría Forense',
                        'Emprendimiento Contable',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Seminario de Graduación II',
                        'Proyecto de Investigación',
                        'Normativa Actualizada',
                        'Ejercicio Profesional Supervisado',
                    ],
                ],
            ],
        ],
    ],
];
