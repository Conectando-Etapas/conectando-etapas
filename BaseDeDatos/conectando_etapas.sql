-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 12:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conectando_etapas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `clave` varchar(535) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `email` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `clave`, `nombre`, `cargo`, `dni`, `email`) VALUES
(1, 'alejandrosirioni', 'Alejandro Sirioni', '', '26738573', 'alejandrosirioni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `anecdota`
--

CREATE TABLE `anecdota` (
  `id_anec` int(11) NOT NULL,
  `titulo` varchar(535) NOT NULL,
  `portada` int(11) NOT NULL,
  `contenido` mediumtext NOT NULL,
  `autor` varchar(535) NOT NULL DEFAULT 'Anonimo',
  `fecha` varchar(535) NOT NULL DEFAULT 'Fecha desconocida',
  `reacciones` varchar(200) NOT NULL DEFAULT '{"like":0,"dislike":0,"smile":0,"sad":0}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anecdota`
--

INSERT INTO `anecdota` (`id_anec`, `titulo`, `portada`, `contenido`, `autor`, `fecha`, `reacciones`) VALUES
(7, 'Sorpresa en el pasillo', 1, '<p>Mi nombre es Guillermo Raúl García fui alumno y docente del establecimiento. Hice el ciclo básico de día en los años ’71, ’72 y ’73. El ciclo superior de noche pues comencé a trabajar con mi padre en el taller mecánico y de tren delantero que él tenía.</p><p>Algo que me quedó grabado un día (en los primeros meses del año 1972, creo) cuando entrabamos a taller 14 hs. El profesor estaba ausente, fuimos a dar el presente para la asistencia al 2do piso y, cuando bajábamos por las escaleras, a la altura del primer piso <em>un compañero dijo algo</em> por lo que el preceptor que nos acompañaba nos hizo <em>retornar</em> al 2do piso para ir a <em>regencia</em>.</p><p>Cuando recién entrabamos al 2do piso <strong>detonó una carga explosiva</strong> que alguien había colocado en un pequeño patio de lúz del primer piso que da a la medianera con la <em>Empresa de construcciones de los Hnos Metilli</em>. Explotaron casi todos los vidrios que daban al patio y yo <strong>quede caído entre todos los vidrios rotos</strong> a la entrada del 2° piso. <em>Ahí nos salvamos por muy poco</em>. De no volver atrás nos hubiera agarrado más cerca. La bomba hizo un <strong>agujero en la losa</strong> que daba a la librería.\n</p>', 'Guillermo Raúl \"Willy\" García', 'Comienzos de 1972', '{\"like\":2,\"dislike\":3,\"smile\":1,\"sad\":1}'),
(8, 'Técnica en la década del \'70', 1, '<p>Mi nombre es Guillermo Raúl García fui alumno y docente del establecimiento.</p><p>Ingresé como alumno a la ENET N° 1 “Ing. Felipe Senillosa” en el año 1971, en 1° 1ra división, donde teníamos un pequeño examen a forma de diagnóstico en ciertas materias como matemáticas. Ingresé pues me gustaba mecánica, tornería y electricidad.</p><p>Se entraba por el portón de calle Além. Al costado izquierdo se encontraban los talleres de hojalatería, herrería y soldadura. Más atrás, antes del montacargas, se encontraba el taller de carpintería. Al fondo de todo estaba el depósito de materiales y herramientas donde solo entraban los profesores.</p><p>Entrabamos a las escaleras y en un semipiso antes de llegar al 1ro subiendo a la derecha se encontraba la librería y a la izquierda la cantina.</p><p>En el primer piso se encontraban el resto de los talleres de electricidad, ajuste mecánico, tornería mecánica y en el centro se encontraba el pañol donde se distribuían las herramientas.</p><p>Donde hoy (2021) se encuentra el taller de carpintería, estaban ubicados los tableros de dibujo técnico divididos en 4 salones.\nEn el segundo piso se encontraban la dirección del establecimiento, la secretaria y la regencia y todos los salones de teoría divididos por tabiques de madera (todo era provisorio hasta que a fines de 1976 se terminaron las nuevas instalaciones que se inauguraron en 1977).</p><p>En el tercer piso se encontraba el gimnasio como está hoy día para educación física.</p><p>En ese entonces Luis Thomas era el abanderado, yo el primer escolta y Enrique Ostinelli el segundo escolta.</p><h3>Profesores en 1°:</h3><ul><li>Teresa Roca (Matemáticas)</li><li>Salvador (Castellano)</li><li>Sottelo (Ajuste)</li><li>Mónaco (Electricidad)</li><li>Yotti (Dibujo Técnico)</li><li>Alvarez (Educación Física)</li><li>Carbonaro (Carpintería)</li></ul><h3>Profesores de 2do:</h3><ul><li>Alberto Martino (Electricidad)</li><li>Vannoni en herrería</li><li>Profesoras de historia como Risso, Suarez y Rifé</li><li>Milazzo y Prieto en inglés</li><li>Salvador y Panunzio en Castellano</li><li>Araujo y Pedreira en física</li><li>Yotti y Brugnera (Dibujo técnico)  </li></ul><p>Regente: Angel Menegas y preceptores como Ricardo Otermin, Carlos Mónaco y Costas. Director Oscar García y vicedirector Omar Marocchi.</p><p>Teníamos que vestir con <strong>camisa azul y corbata, blazer azul y pantalón gris</strong> y para taller <strong>overol blanco</strong>. Teníamos teoría desde 7.30hs a 13.15 hs cuando teníamos 7ma hora (de 40 minutos por materia).   Taller era 3 días por semana, de 14 a 18hs y otro día, de tarde, teníamos 2hs de gimnasia.</p><h3>Compañeros de primer año:</h3><p>Aramburu, Sorbi, Juan y Luis Petrucci, Daniel Testa Vulcano, Jorge Areco, Juan Mogni, Guillermo Braile, Roberto Ceide, Mario Iglesias, Garfagnoli, Bossoto,etc.</p><p>En <strong>segundo</strong> seguían los mismos y se agregaron Juan Fernández, Vanmorlegan, Néstor Arias, Risso.</p><p>Ya en el turno noche (1974) teníamos a profesores como Alonso, Islas, Ferragine, Stambuck, Etcheverry, Damiano, Fadon, Fanucchi.</p>', 'Guillermo Raúl \"Willy\" García', 'Década de 1970', '{\"like\":1,\"dislike\":0,\"smile\":3,\"sad\":2}'),
(9, 'Mi historia en Técnica', 1, '<p>Mi historia en Técnica 2 comienza en el año 1960 en la vieja y desaparecida escuela industrial de 9 de Julio y las Heras. A los 4 meses me dieron el pase a la Escuela Fábrica número 17, la que hoy es la Técnica 2.</p><p>El edificio era el <strong>antiguo Hospital de Tandil</strong>. Recuerdo que las clases de Química, eran en el salón  donde se hacían las autopsias con las mesadas de azulejos y para mí era toda una experiencia. También recuerdo que había comedor para los alumnos que quisieran. El taller estaba en el centro del patio y era el famoso iglú  donde tenías tornería, fresadora, limadora, herrería y también soldadura.</p><p>Una anécdota que me puso los pelos de punta: (temí que me sancionaran) Grande fue el susto cuando, <em>boludeando entre los tornos</em>, veo una persona agachada muy tentadora. Yo con un tripe decímetro en la mano, se me ocurrió darle un golpe en esa parte del cuerpo tentadora. Y se levanta esa persona y ¡era el <strong>profesor Corral</strong>! un tipo bueno pero muy recto.</p><p>Se imaginan mi sorpresa, ¡me quería morir! No sé la cantidad de escusas que dije y fue tal mi tartamudez que el profesor se rio y me aconsejó que no hiciera más esas cosas ya que podían traerme problemas.</p>', '\"Chachy\" Drysdale', '1960', '{\"like\":1,\"dislike\":1,\"smile\":0,\"sad\":1}'),
(10, 'Macanas: Nuestras (mejores) travesuras', 1, '<p>El primer y segundo año siempre soportábamos las cargadas y bromas de los más grandes que estaban ya en tercero. Cuando nos tocó el tercero a nosotros, que éramos un grupo muy unido, las bromas pesadas las hacíamos a todo el mundo en el patio. Recuerdo que <em>llenábamos la pileta del baño y siempre </em><strong><em>mojábamos</em></strong><em> a alguno</em>, igual que nos habían hecho los grandes a nosotros.</p><p>Otra anécdota fue en el baño estábamos <em>jugando al truco en horas de clase</em> y entra el jefe de taller y nos pide las barajas dijimos que no teníamos – cosa que no nos creyó – y pidió <strong>10 amonestaciones para todos los presentes</strong>. Luego que pasó todo, escuche una conversación de este señor con el preceptor Bareto diciéndole “<strong>Eche a Drysdale</strong>” y le contesta “No. A él no. A Fernández”. Sorprendido dijo “en vez de 10 le hubiera puesto 20 amonestaciones así lo echaba”. “<em>De esta me salve justito</em>” pensaba yo.</p><p>Ya en el ciclo superior el estudio era de noche y teníamos la costumbre que si el profesor tardaba en llegar más de 5 minutos nos íbamos y luego regresábamos porque seguíamos en clase. Pero después de que lo hicimos tres o cuatro veces, en los recreos siempre cuidaba la puerta alguien.  \nOtra anécdota fue en plena época de que <em>nombrar a Perón era para que te metieran preso</em>.</p><p>En hora libre nos pusimos a <strong>cantar la marcha peronista y a zapatear</strong> en el piso de madera, ¡¡se armó un revuelo!! Vinieron todos de secretaria y nos hicieron callar. Resultado: amonestaciones colectivas para todos. Nos salvó siempre que el abanderado y escolta eran de nuestro curso y así zafamos de las amonestaciones. Igualmente, tuvimos que hacer <strong>un cuarto año humanístico</strong> para equiparar no sé qué.  \n<em>De todos los que comenzamos primer año llegamos </em><strong><em>solamente siete</em></strong><em>.</em></p><p><strong>El título me ha servido durante toda mi vida laboral</strong> y hasta he trabajado fuera del país. <em>Orgulloso de haber estudiado en </em><strong><em>La Técnica</em></strong>, y egresar en el año 1966 juntamente haciendo el servicio militar obligatorio.</p>', '\"Chachy\" Drysdale', 'Década de 1960', '{\"like\":2,\"dislike\":1,\"smile\":0,\"sad\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoria`
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
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `id_cons` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `contenido` text NOT NULL,
  `Nombre` varchar(535) NOT NULL,
  `Email` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `titulo` varchar(535) NOT NULL DEFAULT 'Imagen',
  `ubicacion` varchar(535) NOT NULL,
  `fecha` varchar(535) NOT NULL DEFAULT 'Desconocida',
  `descripcion` varchar(535) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orientacion`
--

CREATE TABLE `orientacion` (
  `id_orientacion` int(11) NOT NULL,
  `orientacion` varchar(535) NOT NULL,
  `Contenido` text NOT NULL,
  `imagen` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orientacion`
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
-- Table structure for table `tiene_categoria`
--

CREATE TABLE `tiene_categoria` (
  `id_imagen` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anecdota`
--
ALTER TABLE `anecdota`
  ADD PRIMARY KEY (`id_anec`),
  ADD KEY `portada` (`portada`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_cons`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `orientacion`
--
ALTER TABLE `orientacion`
  ADD PRIMARY KEY (`id_orientacion`);

--
-- Indexes for table `tiene_categoria`
--
ALTER TABLE `tiene_categoria`
  ADD PRIMARY KEY (`id_imagen`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anecdota`
--
ALTER TABLE `anecdota`
  MODIFY `id_anec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_cons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id_orientacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
