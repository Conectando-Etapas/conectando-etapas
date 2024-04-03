-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-03-2024 a las 12:11:59
-- Versión del servidor: 8.0.34-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conectando_etapas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `clave` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(535) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `clave`, `nombre`, `cargo`, `dni`, `email`) VALUES
(1, 'alejandrosirioni', 'Alejandro Sirioni', '', '26738573', 'alejandrosirioni@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anecdota`
--

CREATE TABLE `anecdota` (
  `id_anec` int NOT NULL,
  `titulo` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `portada` int NOT NULL,
  `contenido` text COLLATE utf8mb4_general_ci NOT NULL,
  `autor` varchar(535) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Anonimo',
  `fecha` varchar(535) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Fecha desconocida',
  `reacciones` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '{"like":0,"dislike":0,"smile":0,"sad":0}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `anecdota`
--

INSERT INTO `anecdota` (`id_anec`, `titulo`, `portada`, `contenido`, `autor`, `fecha`, `reacciones`) VALUES
(7, 'Sorpresa en el pasillo', 1, 'Mi nombre es Guillermo Raúl García fui alumno y docente del establecimiento. Hice el ciclo básico de día en los años ’71, ’72 y ’73. El ciclo superior de noche pues comencé a trabajar con mi padre en el taller mecánico y de tren delantero que él tenía. \r\n \r\nAlgo que me quedó grabado un día (en los primeros meses del año 1972, creo) cuando entrabamos a taller 14 hs. El profesor estaba ausente, fuimos a dar el presente para la asistencia al 2do piso y, cuando bajábamos por las escaleras, a la altura del primer piso *un compañero dijo algo* por lo que el preceptor que nos acompañaba nos hizo *retornar* al 2do piso para ir a *regencia*.   \r\nCuando recién entrabamos al 2do piso **detonó una carga explosiva** que alguien había colocado en un pequeño patio de luz del primer piso que da a la medianera con la Empresa de construcciones de los Hnos Metilli. Explotaron casi todos los vidrios que daban al patio y yo quede caído entre todos los vidrios rotos a la entrada del 2do piso. Ahí nos salvamos por muy poco. De no volver atrás nos hubiera agarrado más cerca. La bomba hizo un **agujero en la losa** que daba a la librería.\r\n', 'Guillermo Raúl \"Willy\" García', 'Comienzos de 1972', '{\"like\":2,\"dislike\":3,\"smile\":0,\"sad\":1}'),
(8, 'Técnica en la década del \'70', 1, 'Mi nombre es Guillermo Raúl García fui alumno y docente del establecimiento. \n \nIngresé como alumno a la ENET N° 1 “Ing. Felipe Senillosa” en el año 1971, en 1° 1ra división, donde teníamos un pequeño examen a forma de diagnóstico en ciertas materias como matemáticas. Ingresé pues me gustaba mecánica, tornería y electricidad.  \nSe entraba por el portón de calle Além. Al costado izquierdo se encontraban los talleres de hojalatería, herrería y soldadura. Más atrás, antes del montacargas, se encontraba el taller de carpintería. Al fondo de todo estaba el depósito de materiales y herramientas donde solo entraban los profesores.  \nEntrabamos a las escaleras y en un semipiso antes de llegar al 1ro subiendo a la derecha se encontraba la librería y a la izquierda la cantina.  \nEn el primer piso se encontraban el resto de los talleres de electricidad, ajuste mecánico, tornería mecánica y en el centro se encontraba el pañol donde se distribuían las herramientas.  \nDonde hoy (2021) se encuentra el taller de carpintería, estaban ubicados los tableros de dibujo técnico divididos en 4 salones.\nEn el segundo piso se encontraban la dirección del establecimiento, la secretaria y la regencia y todos los salones de teoría divididos por tabiques de madera (todo era provisorio hasta que a fines de 1976 se terminaron las nuevas instalaciones que se inauguraron en 1977).  \nEn el tercer piso se encontraba el gimnasio como está hoy día para educación física.  \nEn ese entonces Luis Thomas era el abanderado, yo el primer escolta y Enrique Ostinelli el segundo escolta.  \n### Profesores en 1°:  \n- Teresa Roca (Matemáticas)\n- Salvador (Castellano)\n- Sottelo (Ajuste)\n- Mónaco (Electricidad)\n- Yotti (Dibujo Técnico)\n- Alvarez (Educación Física)\n- Carbonaro (Carpintería)\n### Profesores de 2do:  \n- Alberto Martino (Electricidad)\n- Vannoni en herrería\n- Profesoras de historia como Risso, Suarez y Rifé\n- Milazzo y Prieto en inglés\n- Salvador y Panunzio en Castellano\n- Araujo y Pedreira en física\n- Yotti y Brugnera (Dibujo técnico)  \n\nRegente Angel Menegas y preceptores como Ricardo Otermin, Carlos Mónaco y Costas. Director Oscar García y vicedirector Omar Marocchi.   \nTeníamos que vestir con **camisa azul y corbata, blazer azul y pantalón gris** y para taller **overol blanco**. Teníamos teoría desde 7.30hs a 13.15 hs cuando teníamos 7ma hora (de 40 minutos por materia).   Taller era 3 días por semana, de 14 a 18hs y otro día, de tarde, teníamos 2hs de gimnasia.  \n### Compañeros de primer año  \nAramburu, Sorbi, Juan y Luis Petrucci, Daniel Testa Vulcano, Jorge Areco, Juan Mogni, Guillermo Braile, Roberto Ceide, Mario Iglesias, Garfagnoli, Bossoto,etc.  \nEn **segundo** seguían los mismos y se agregaron Juan Fernández, Vanmorlegan, Néstor Arias, Risso.  \nYa en el turno noche (1974) teníamos a profesores como Alonso, Islas, Ferragine, Stambuck, Etcheverry, Damiano, Fadon, Fanucchi.   ', 'Guillermo Raúl \"Willy\" Gracía', '1960', '{\"like\":1,\"dislike\":0,\"smile\":3,\"sad\":1}'),
(9, 'Mi historia en Técnica', 1, 'Mi historia en Técnica 2 comienza en el año 1960 en la vieja y desaparecida escuela industrial de 9 de Julio y las Heras. A los 4 meses me dieron el pase a la Escuela Fábrica número 17, la que hoy es la Técnica 2.  \r\nEl edificio era el **antiguo Hospital de Tandil**. Recuerdo que las clases de Química, eran en el salón  donde se hacían las autopsias con las mesadas de azulejos y para mí era toda una experiencia. También recuerdo que había comedor para los alumnos que quisieran. El taller estaba en el centro del patio y era el famoso iglú  donde tenías tornería, fresadora, limadora, herrería y también soldadura.  \r\nUna anécdota que me puso los pelos de punta: (temí que me sancionaran) Grande fue el susto cuando, *boludeando entre los tornos*, veo una persona agachada muy tentadora. Yo con un tripe decímetro en la mano, se me ocurrió darle un golpe en esa parte del cuerpo tentadora. Y se levanta esa persona y ¡era el *profesor Corral*! un tipo bueno pero muy recto.  \r\nSe imaginan mi sorpresa, ¡me quería morir! No sé la cantidad de escusas que dije y fue tal mi tartamudez que el profesor se rio y me aconsejó que no hiciera más esas cosas ya que podían traerme problemas.', '\"Chachy\" Drysdale', '1960', '{\"like\":1,\"dislike\":1,\"smile\":0,\"sad\":1}'),
(10, 'Macanas: Nuestras (mejores) travesuras', 1, 'El primer y segundo año siempre soportábamos las cargadas y bromas de los más grandes que estaban ya en tercero. Cuando nos tocó el tercero a nosotros, que éramos un grupo muy unido, las bromas pesadas las hacíamos a todo el mundo en el patio. Recuerdo que *llenábamos la pileta del baño y siempre **mojábamos** a alguno*, igual que nos habían hecho los grandes a nosotros.  \r\nOtra anécdota fue en el baño estábamos *jugando al truco en horas de clase* y entra el jefe de taller y nos pide las barajas dijimos que no teníamos – cosa que no nos creyó – y pidió **10 amonestaciones para todos los presentes. Luego que pasó todo, escuche una conversación de este señor con el preceptor Bareto diciéndole “**Eche a Drysdale**” y le contesta “No. A él no. A Fernández”. Sorprendido dijo “en vez de 10 le hubiera puesto 20 amonestaciones así lo echaba”. “De esta me salve justito” pensaba yo.  \r\nYa en el ciclo superior el estudio era de noche y teníamos la costumbre que si el profesor tardaba en llegar más de 5 minutos nos íbamos y luego regresábamos porque seguíamos en clase. Pero después de que lo hicimos tres o cuatro veces, en los recreos siempre cuidaba la puerta alguien.  \r\nOtra anécdota fue en plena época de que *nombrar a Perón era para que te metieran preso*. En hora libre nos pusimos a **cantar la marcha peronista y a zapatear** en el piso de madera, ¡¡se armó un revuelo!! Vinieron todos de secretaria y nos hicieron callar. Resultado: amonestaciones colectivas para todos. Nos salvó siempre que el abanderado y escolta eran de nuestro curso y así zafamos de las amonestaciones. Igualmente, tuvimos que hacer un **cuarto año humanístico** para equiparar no sé qué.  \r\n*De todos los que comenzamos primer año llegamos **solamente siete***.  \r\n**El título me ha servido durante toda mi vida laboral** y hasta he trabajado fuera del país. *Orgulloso de haber estudiado en **La Técnica***, y egresar en el año 1966 juntamente haciendo el servicio militar obligatorio.', '\"Chachy\" Drysdale', 'Década de 1960', '{\"like\":2,\"dislike\":1,\"smile\":0,\"sad\":0}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'ELECTROMECANICA', 'Se relaciona a la tecnicatura de Electromecánica, a sus aulas, alumnos y profesores.'),
(2, 'QUIMICA', 'Se relaciona a la tecnicatura de Química, a sus aulas, alumnos y profesores.'),
(3, 'INFORMATICA', 'Se relaciona a la tecnicatura de Informática, a sus aulas, alumnos y profesores.'),
(4, 'PROGRAMACION', 'Se relaciona a la tecnicatura de Programación, a sus aulas, alumnos y profesores.'),
(5, 'AUTOMOTORES', 'Se relaciona a la tecnicatura de Automotores, a sus aulas, alumnos y profesores.'),
(6, 'MMO', 'Se relaciona a la tecnicatura de Maestro Mayor de Obras, a sus aulas, alumnos y profesores.'),
(7, 'AULA', 'Imágenes que contienen aulas o clases en ellas.'),
(8, 'DOCENTE', 'Contiene participantes del grupo docente.'),
(9, 'FARANDULA', 'Muestra ensayos, presentaciones y otros elementos relacionados a la farándula estudiantil.'),
(10, 'EGRESADOS', 'Imágenes de grupos de egresados.'),
(11, 'ALUMNOS', 'Incluye estudiantes de la institución.'),
(12, 'TROFEO', 'Galardones y premios obtenidos por la escuela.'),
(13, 'DEPORTE', 'Actividades deportivas en la escuela. Encuentros intercolegiales.'),
(14, 'EXPOTECNICA', 'Preparativos, invitados, stands y propuestas de la ExpoTécnica.'),
(15, 'SALIDA', 'Remembranza de visitas educativas, viajes y otras salidas.'),
(16, 'HISTORICAS', 'Imágenes antiguas, fragmentos de diarios y revistas. Hitos históricos de la escuela.'),
(17, 'INDIVIDUOS', 'Imágenes dónde protagoniza una persona en particular, como retratos de docentes y directivos.'),
(18, 'DESTACADOS', 'Proyectos con altas repercusiones, competencias importantes y otros momentos importantes.'),
(19, 'INFRAESTRUCTURA', 'Imágenes de la construcción del edificio, reformas. Adquisición de herramientas, tecnología.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_cons` int NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contenido` text COLLATE utf8mb4_general_ci NOT NULL,
  `Nombre` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(535) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int NOT NULL,
  `titulo` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `ubicacion` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(535) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_img`, `titulo`, `ubicacion`, `fecha`, `descripcion`) VALUES
(2, '', 'automotores.jpg', 'febrero 2018', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?\r\n'),
(3, '', 'automotores3.jpg', 'mayo 2022', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?\r\n'),
(4, '', 'carpinteria1.jpg', '12/3/2023', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?\r\n'),
(5, '', 'construccion2.jpg', '1990', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?\r\n'),
(6, '', 'dibujotecnico.jpg', 'febrero 2022', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?\r\n'),
(7, '', 'electricidad2.jpg', '23/4/1999', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?\r\n'),
(8, '', 'electro.jpg', 'enero 2010', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?'),
(9, '', 'electro2.jpg', '2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?'),
(10, '', 'escuelavieja.jpg', '13/12/2009', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad fuga ipsam, repudiandae eaque libero numquam dolor unde cumque ipsum dolores, quibusdam similique corporis porro dignissimos nihil magni expedita! Eaque?'),
(11, '', 'torneria2.jpg', '[value-3]', '[value-4]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orientacion`
--

CREATE TABLE `orientacion` (
  `id_orientacion` int NOT NULL,
  `orientacion` varchar(535) COLLATE utf8mb4_general_ci NOT NULL,
  `Contenido` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` varchar(535) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orientacion`
--

INSERT INTO `orientacion` (`id_orientacion`, `orientacion`, `Contenido`, `imagen`) VALUES
(14, 'mmo', '<p>La orientación en Maestro Mayor de Obra tiene como objetivo formar profesionales competentes en la supervisión y coordinación de proyectos de construcción. A lo largo de su formación, los estudiantes adquieren conocimientos especializados en planificación, control de costos y gestión de recursos en el contexto de la construcción.</p><p><br></p><h2>Salidas laborales</h2><p><br></p><p>Las salidas laborales para los graduados de esta orientación son variadas. Pueden desempeñarse como supervisores de obras en estudios de arquitectura, trabajar en empresas constructoras liderando proyectos o establecerse como profesionales independientes en el ámbito de la construcción.</p><p><br></p><h2>Algunas Materias</h2><p><br></p><p>Entre las materias destacadas en esta orientación se incluyen \"Planificación de Obras\", que aborda la elaboración de cronogramas y presupuestos, \"Control de Costos\", centrada en la gestión eficiente de los recursos financieros, y \"Gestión de Proyectos de Construcción\", que prepara a los estudiantes para liderar proyectos desde su concepción hasta su finalización.</p><p><br></p>', 'Arquitectura1.png'),
(15, 'programacion', '<h2>Programación</h2><p><br></p><p>La orientación en Programación de nuestra escuela se centra en proporcionar a los estudiantes habilidades avanzadas en el desarrollo de software. Durante el curso de sus estudios, los alumnos se sumergen en el aprendizaje de lenguajes de programación esenciales como Java, C++ y Python, así como en el diseño de algoritmos y estructuras de datos. Este enfoque exhaustivo permite a los estudiantes adquirir una comprensión profunda de los principios fundamentales de la programación.</p><p><br></p><h2>Salidas laborales </h2><p><br></p><p>Las salidas laborales para aquellos que eligen esta orientación son diversas. Los graduados pueden desempeñarse como programadores en empresas de tecnología, participar en proyectos de desarrollo de software o incluso emprender sus propios proyectos como desarrolladores independientes.</p><p><br></p><h2>Algunas materias</h2><p><br></p><p>Entre las materias destacadas en esta orientación se encuentran \"Programación Avanzada\", donde se exploran conceptos más complejos y desafiantes, \"Diseño de Algoritmos\", que enfatiza la importancia de estructuras de datos eficientes, y \"Desarrollo Web\", que abarca la creación de aplicaciones y sitios web interactivos.</p>', 'Programacion2.png'),
(16, 'quimica', '<h2>Química</h2><p><br></p><p>La orientación en Química de nuestra escuelas tiene como objetivo proporcionar a los estudiantes una sólida formación en química industrial y de laboratorio. A lo largo de su formación, los estudiantes exploran conceptos clave en química analítica, química orgánica y operaciones unitarias.</p><p><br></p><h2>Salidas laborales</h2><p><br></p><p>Las salidas laborales para quienes eligen esta orientación son diversas y abarcan campos como la investigación, la producción de productos químicos y el control de calidad. Los graduados pueden encontrar empleo en laboratorios de investigación, plantas industriales químicas o empresas relacionadas con la química.</p><p><br></p><h2>Algunas materias</h2><p><br></p><p>Entre las materias destacadas en esta orientación se encuentran \"Química Analítica\", que se centra en las técnicas analíticas y de medición, \"Química Orgánica\", que explora los compuestos orgánicos y sus reacciones, y \"Operaciones Unitarias\", que aborda los procesos químicos a nivel industrial.</p>', 'Quimica2.png'),
(17, 'electromecanica', '<h1>Electromecánica</h1><p><br></p><p>La orientación en Electromecánica de nuestra escuelas tiene como objetivo formar profesionales capacitados en la integración de sistemas eléctricos y mecánicos. A lo largo de su formación, los estudiantes adquieren habilidades en el mantenimiento, reparación y diseño de sistemas electromecánicos.</p><p><br></p><h2>Salidas labores</h2><p><br></p><p>Las salidas laborales para los graduados de esta orientación son diversas, abarcando la industria manufacturera, la automatización industrial y el mantenimiento de maquinaria. Los profesionales pueden desempeñarse como técnicos especializados en el área electromecánica, brindando soluciones a problemas complejos en sistemas integrados.</p><p><br></p><h2>Algunas materia</h2><p><br></p><p>Entre las materias destacadas en esta orientación se incluyen \"Control Automático\", que explora técnicas para la automatización de procesos, \"Máquinas y Equipos Eléctricos\", que se centra en el funcionamiento de dispositivos electromecánicos, y \"Sistemas Hidráulicos y Neumáticos\", que aborda la aplicación de fluidos en sistemas mecánicos.</p>', 'Electro1.png'),
(18, 'informatica', '<p>La orientación en Informática de nuestra escuelas ofrece a los estudiantes una formación integral en hardware, software y redes. A lo largo de su formación, los alumnos exploran temas clave como arquitectura de computadoras, redes de computadoras y sistemas operativos.</p><p><br></p><h2>Salidas laborales</h2><p><br></p><p>Las salidas laborales para los graduados de esta orientación son diversas y abarcan desde empresas de tecnología hasta departamentos de tecnología de la información (TI) en diversas organizaciones. Los profesionales pueden desempeñarse como técnicos de sistemas, administradores de redes, programadores o especialistas en seguridad informática.</p><p><br></p><h2>Algunas materias</h2><p><br></p><p>Entre las materias destacadas en esta orientación se encuentran \"Arquitectura de Computadoras\", que explora los componentes y el diseño de sistemas informáticos, \"Redes de Computadoras\", que aborda la conectividad y comunicación entre dispositivos, y \"Sistemas Operativos\", que se centra en el software que gestiona los recursos de un sistema informático.</p>', 'Informatica1.png'),
(19, 'automotores', '<h2>Automotores</h2><p><br></p><p>La orientación en Automotores de nuestra escuelas se centra en la formación de profesionales especializados en el mantenimiento y la reparación de vehículos. A lo largo de su formación, los estudiantes adquieren habilidades en el diagnóstico de fallas, la reparación de motores y sistemas eléctricos.</p><p><br></p><h2>Salidas laborales</h2><p><br></p><p>Las salidas laborales para los graduados de esta orientación son variadas y pueden incluir el trabajo en talleres mecánicos, concesionarios de automóviles o como emprendedores independientes en el sector automotriz. Los profesionales pueden ofrecer servicios de mantenimiento, reparación y asesoramiento técnico especializado.</p><p><br></p><h2>Algunas materias</h2><p><br></p><p>Entre las materias destacadas en esta orientación se encuentran \"Mecánica Automotriz\", que aborda los principios fundamentales de la mecánica de vehículos, \"Sistemas de Transmisión\", que explora los componentes relacionados con la transmisión de fuerza en los automóviles, y \"Electrónica Automotriz\", que se centra en los sistemas eléctricos y electrónicos de los vehículos.</p>', 'Automotor4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene_categoria`
--

CREATE TABLE `tiene_categoria` (
  `id_imagen` int NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiene_categoria`
--

INSERT INTO `tiene_categoria` (`id_imagen`, `id_categoria`) VALUES
(0, 0),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(5, 2),
(23, 2),
(23, 3),
(23, 4),
(2, 5),
(3, 5),
(6, 5),
(2, 6),
(4, 6),
(5, 6),
(6, 6),
(7, 6),
(10, 7),
(2, 8),
(10, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `anecdota`
--
ALTER TABLE `anecdota`
  ADD PRIMARY KEY (`id_anec`),
  ADD KEY `portada` (`portada`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_cons`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  ADD PRIMARY KEY (`id_orientacion`);

--
-- Indices de la tabla `tiene_categoria`
--
ALTER TABLE `tiene_categoria`
  ADD PRIMARY KEY (`id_imagen`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `anecdota`
--
ALTER TABLE `anecdota`
  MODIFY `id_anec` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_cons` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id_orientacion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
