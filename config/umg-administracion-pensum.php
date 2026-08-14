<?php

return [
    'eyebrow' => 'Plan de estudios',
    'title' => 'Pensum de la carrera',
    'lead' => 'Un recorrido por los ciclos formativos: de los fundamentos de la gestión al ejercicio profesional.',

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
                        'Introducción a la Administración',
                        'Contabilidad I',
                        'Matemáticas para Negocios',
                        'Comunicación Empresarial',
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
            'title' => 'Gestión y finanzas',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Administración Financiera I',
                        'Costos y Presupuestos',
                        'Comportamiento Organizacional',
                        'Mercadeo I',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Administración Financiera II',
                        'Mercadeo II',
                        'Gestión de Operaciones',
                        'Informática para la Gestión',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-3',
            'number' => '03',
            'label' => 'Ciclo III',
            'title' => 'Estrategia y personas',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Gerencia Estratégica',
                        'Talento Humano',
                        'Economía Gerencial',
                        'Investigación de Mercados',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Logística y Cadena de Suministro',
                        'Negociación y Conflictos',
                        'Ética Empresarial',
                        'Emprendimiento',
                    ],
                ],
            ],
        ],
        [
            'id' => 'ciclo-4',
            'number' => '04',
            'label' => 'Ciclo IV',
            'title' => 'Dirección avanzada',
            'semesters' => [
                [
                    'label' => 'Semestre 1',
                    'courses' => [
                        'Dirección de Empresas',
                        'Análisis de Decisiones',
                        'Proyectos de Inversión',
                        'Comercio Internacional',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Gestión del Cambio',
                        'Innovación Organizacional',
                        'Responsabilidad Social',
                        'Coaching Gerencial',
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
                        'Auditoría Administrativa',
                        'Liderazgo Ejecutivo',
                    ],
                ],
                [
                    'label' => 'Semestre 2',
                    'courses' => [
                        'Seminario de Graduación II',
                        'Casos Empresariales',
                        'Gestión Digital',
                        'Ejercicio Profesional Supervisado',
                    ],
                ],
            ],
        ],
    ],
];
