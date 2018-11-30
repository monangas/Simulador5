-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2018 a las 23:15:39
-- Versión del servidor: 5.6.19-enterprise-commercial-advanced
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id6475911_simulador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `idalimentos` int(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `presentacion` varchar(45) NOT NULL,
  `grupo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`idalimentos`, `nombre`, `presentacion`, `grupo`) VALUES
(2, 'Nuggets bolsa x 48 und', 'Paquete x 30', 'Ayc - aves y caza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `idbebidas` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `presentacion` varchar(45) NOT NULL,
  `grupo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`idbebidas`, `nombre`, `presentacion`, `grupo`) VALUES
(36, 'Agua capital', '500 ml', 'Ayg - aguas y gaseosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `idclasificacion` int(11) NOT NULL,
  `clasificacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idclasificacion`, `clasificacion`) VALUES
(1, 'Locación'),
(2, 'Facilidades técnicas'),
(3, 'Mobiliario'),
(4, 'Publicidad BTL/ATL'),
(5, 'Personal/RRHH'),
(6, 'Menaje'),
(7, 'Alimentos y bebidas'),
(8, 'Hospedaje'),
(9, 'Transporte'),
(10, 'Otros requerimientos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion_por_tipo`
--

CREATE TABLE `clasificacion_por_tipo` (
  `idclasificacion` int(11) NOT NULL,
  `idtipo_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clasificacion_por_tipo`
--

INSERT INTO `clasificacion_por_tipo` (`idclasificacion`, `idtipo_evento`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(10, 2),
(1, 3),
(2, 3),
(3, 3),
(5, 3),
(6, 3),
(7, 3),
(10, 3),
(1, 4),
(2, 4),
(3, 4),
(5, 4),
(6, 4),
(7, 4),
(10, 4),
(1, 5),
(2, 5),
(3, 5),
(5, 5),
(6, 5),
(7, 5),
(10, 5),
(1, 6),
(2, 6),
(3, 6),
(5, 6),
(6, 6),
(7, 6),
(10, 6),
(1, 7),
(2, 7),
(3, 7),
(5, 7),
(6, 7),
(7, 7),
(10, 7),
(1, 8),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(6, 8),
(7, 8),
(10, 8),
(1, 9),
(2, 9),
(3, 9),
(4, 9),
(5, 9),
(6, 9),
(7, 9),
(10, 9),
(1, 10),
(2, 10),
(3, 10),
(5, 10),
(6, 10),
(7, 10),
(10, 10),
(1, 11),
(3, 11),
(4, 11),
(5, 11),
(6, 11),
(7, 11),
(8, 11),
(9, 11),
(10, 11),
(1, 12),
(3, 12),
(4, 12),
(5, 12),
(6, 12),
(7, 12),
(8, 12),
(9, 12),
(10, 12),
(1, 13),
(2, 13),
(3, 13),
(4, 13),
(5, 13),
(6, 13),
(7, 13),
(8, 13),
(9, 13),
(10, 13),
(1, 14),
(2, 14),
(3, 14),
(5, 14),
(6, 14),
(7, 14),
(10, 14),
(1, 15),
(2, 15),
(3, 15),
(5, 15),
(6, 15),
(7, 15),
(10, 15),
(1, 16),
(2, 16),
(3, 16),
(5, 16),
(6, 16),
(7, 16),
(10, 16),
(1, 17),
(2, 17),
(3, 17),
(5, 17),
(6, 17),
(7, 17),
(10, 17),
(1, 18),
(2, 18),
(3, 18),
(5, 18),
(6, 18),
(7, 18),
(10, 18),
(1, 19),
(2, 19),
(3, 19),
(5, 19),
(6, 19),
(7, 19),
(10, 19),
(1, 20),
(2, 20),
(3, 20),
(5, 20),
(6, 20),
(7, 20),
(10, 20),
(1, 21),
(2, 21),
(3, 21),
(5, 21),
(6, 21),
(7, 21),
(10, 21),
(1, 22),
(2, 22),
(3, 22),
(5, 22),
(6, 22),
(7, 22),
(10, 22),
(1, 23),
(2, 23),
(3, 23),
(5, 23),
(6, 23),
(7, 23),
(10, 23),
(1, 24),
(2, 24),
(3, 24),
(4, 24),
(5, 24),
(6, 24),
(7, 24),
(10, 24),
(1, 25),
(2, 25),
(3, 25),
(4, 25),
(5, 25),
(6, 25),
(7, 25),
(10, 25),
(1, 26),
(2, 26),
(3, 26),
(4, 26),
(5, 26),
(6, 26),
(7, 26),
(10, 26),
(1, 27),
(2, 27),
(3, 27),
(4, 27),
(5, 27),
(6, 27),
(7, 27),
(10, 27),
(1, 28),
(2, 28),
(3, 28),
(5, 28),
(6, 28),
(7, 28),
(10, 28),
(1, 29),
(2, 29),
(3, 29),
(5, 29),
(6, 29),
(7, 29),
(10, 29),
(1, 30),
(2, 30),
(3, 30),
(4, 30),
(5, 30),
(6, 30),
(7, 30),
(10, 30),
(1, 31),
(2, 31),
(3, 31),
(5, 31),
(6, 31),
(7, 31),
(10, 31),
(1, 32),
(2, 32),
(3, 32),
(4, 32),
(5, 32),
(6, 32),
(7, 32),
(10, 32),
(1, 33),
(2, 33),
(3, 33),
(5, 33),
(6, 33),
(7, 33),
(10, 33),
(1, 34),
(2, 34),
(3, 34),
(5, 34),
(6, 34),
(7, 34),
(10, 34),
(1, 35),
(2, 35),
(3, 35),
(5, 35),
(6, 35),
(7, 35),
(10, 35),
(1, 36),
(2, 36),
(3, 36),
(4, 36),
(5, 36),
(6, 36),
(7, 36),
(10, 36),
(1, 37),
(2, 37),
(3, 37),
(5, 37),
(6, 37),
(7, 37),
(10, 37),
(1, 38),
(2, 38),
(3, 38),
(4, 38),
(5, 38),
(6, 38),
(7, 38),
(10, 38),
(1, 39),
(2, 39),
(3, 39),
(4, 39),
(5, 39),
(6, 39),
(7, 39),
(10, 39),
(1, 40),
(2, 40),
(3, 40),
(5, 40),
(6, 40),
(7, 40),
(10, 40),
(1, 41),
(2, 41),
(3, 41),
(4, 41),
(5, 41),
(6, 41),
(7, 41),
(10, 41),
(1, 42),
(2, 42),
(3, 42),
(4, 42),
(5, 42),
(6, 42),
(7, 42),
(10, 42),
(1, 43),
(2, 43),
(3, 43),
(4, 43),
(5, 43),
(6, 43),
(7, 43),
(10, 43),
(1, 44),
(2, 44),
(3, 44),
(4, 44),
(5, 44),
(6, 44),
(7, 44),
(10, 44),
(1, 45),
(2, 45),
(3, 45),
(4, 45),
(5, 45),
(6, 45),
(7, 45),
(10, 45),
(1, 46),
(2, 46),
(3, 46),
(4, 46),
(5, 46),
(6, 46),
(7, 46),
(10, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE `ingrediente` (
  `idingrediente` int(11) NOT NULL,
  `ingrediente` varchar(45) NOT NULL,
  `unidad` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingrediente`
--

INSERT INTO `ingrediente` (`idingrediente`, `ingrediente`, `unidad`) VALUES
(1, 'aceite de girasol', 'LT'),
(2, 'agua', 'LT'),
(3, 'arroz', 'GR'),
(4, 'azúcar', 'GR'),
(5, 'azúcar morena', 'GR'),
(6, 'banano', 'GR'),
(7, 'canela', 'GR'),
(8, 'fresas', 'GR'),
(9, 'harina', 'GR'),
(10, 'hielo', 'GR'),
(11, 'huevo', 'GR'),
(12, 'jamón', 'GR'),
(13, 'leche', 'ML'),
(14, 'Leche de Almendras', 'ML'),
(15, 'mandarina', 'GR'),
(16, 'mango', 'GR'),
(17, 'maracuyá', 'GR'),
(18, 'miel', 'ML'),
(19, 'miga de pan', 'GR'),
(20, 'papa pastusa', 'GR'),
(21, 'plátano', 'GR'),
(22, 'queso mozzarella', 'GR'),
(23, 'uvas pasas', 'GR'),
(24, 'yogurt', 'GR'),
(25, 'PAPA CRIOLLA', 'KG'),
(26, 'PAPA SABANERA', 'KG'),
(27, 'MAZORCA', 'KG'),
(28, 'POLLO', 'KG'),
(29, 'GUASCAS', 'KG'),
(30, 'CEBOLLA CABEZONA BLANCA', 'KG'),
(31, 'CILANTRO', 'KG'),
(32, 'SAL', 'KG'),
(33, 'LOMO DE CERDO', 'KG'),
(34, 'VINO DE MANZANA', 'LT'),
(35, 'SALSA DE CARNE', 'GR'),
(36, 'MANZANA', 'UN'),
(37, 'PIMIENTA NEGRA', 'GR'),
(38, 'CREMA DE LECHE', 'CC'),
(39, 'TOCINETA', 'GR'),
(40, 'MORA', 'GR'),
(41, 'FRIJOL', 'KG'),
(42, 'FRIJOL', 'KG'),
(43, 'KUMIS', 'L'),
(44, 'Nuevo', 'Li');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente_por_receta`
--

CREATE TABLE `ingrediente_por_receta` (
  `receta_idreceta` int(11) NOT NULL,
  `ingrediente_idingrediente` int(11) NOT NULL,
  `cantidad` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingrediente_por_receta`
--

INSERT INTO `ingrediente_por_receta` (`receta_idreceta`, `ingrediente_idingrediente`, `cantidad`) VALUES
(7, 1, '500'),
(7, 9, '150'),
(7, 11, '3'),
(7, 12, '200'),
(7, 19, '100'),
(7, 20, '200'),
(7, 22, '300'),
(8, 3, '370'),
(8, 4, '250'),
(8, 7, '15'),
(8, 13, '245'),
(8, 23, '80'),
(9, 2, '2'),
(9, 4, '25'),
(9, 15, '250'),
(10, 2, '2'),
(10, 4, '200'),
(10, 16, '400'),
(10, 44, '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco`
--

CREATE TABLE `marco` (
  `idmarco` int(11) NOT NULL,
  `marco` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `des_mar` varchar(2000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marco`
--

INSERT INTO `marco` (`idmarco`, `marco`, `des_mar`) VALUES
(1, 'Explotación Sexual Comercial de Niños, Niñas y Adolescentes ESCNNA', 'La Explotación Sexual Comercial de Niñas, Niños y Adolescentes – ESCNNA – es una violación de los derechos fundamentales de la niñez y es considerada por la legislación colombiana como un delito, en el cual una o más personas denominadas proxenetas, utilizan a hombres o mujeres menores de 18 años (denominadas víctimas), para realizar actividades sexuales, eróticas o de pornografía con el objeto de satisfacer los intereses o deseos de un tercero (denominado abusador) a cambio de un pago o promesa de pago, el cual puede ser en efectivo, en especie o en cualquier otro tipo de participación económica para la víctima y/o el proxeneta. \r\nLey 679 de 2001:Esta ley tiene por objeto dictar medidas de protección contra la explotación, la pornografía, el turismo sexual y demás formas de abuso sexual con menores de edad, mediante el establecimiento de normas de carácter preventivo y sancionatorio.\r\nLey 985 de 2005:Esta busca adoptar medidas de prevención, protección y asistencia necesarias para garantizar el respeto de los derechos humanos de las víctimas y posibles víctimas de la trata de personas, tanto las residentes o trasladadas en el territorio nacional, como los colombianos en el exterior, y para fortalecer la acción del Estado frente a este delito.\r\nLey 1329 de 2009:Esta ley condena con mínimo 14 años de prisión a quien da información, promueve o incentiva el contacto con niños, niñas y adolescentes para explotación sexual. También a quién compra sexo con una persona menor de edad, recibe una condena de hasta 32 años de cárcel.Igualmente quien produce o comercializa con pornografía que involucre a menores de 18 años, puede recibir una condena de hasta 32 años de cárcel .\r\nLey 1336 de 2009:Esta ley, está dirigida a dueños de establecimientos, que ofrecen o permiten en su negocio la explotación sexual, quien incurra en este delito se le puede cerrar o aplicar la extinción de dominio sobre su establecimiento.\r\n'),
(3, 'Impuestos IVA ley 12819 de 2.016.', '\r\nLos servicios de alimentación institucional o empresarial prestado bajo contrato catering, los cuales estarán gravados a la tarifa general de IVA (19%) cuando correspondan al suministro de comidas o bebidas preparadas para los empleados de la empresa contratante.\r\n'),
(4, 'Impuestos IMPUESTO NACIONAL AL CONSUMO LEY 1607 DEL 2012', 'Los contratos catering para eventos donde se suministra la comida o bebida para las\r\nrecepciones de empresas, bodas, fiestas y cualquier otro tipo de celebración o reunión,\r\ndeberán generar el nuevo Impuesto al Consumo a la tarifa del 8%.\r\n'),
(5, 'Impuestos IVA', 'La prestación de servicios en el territorio nacional están gravados con la tarifa general del IVA (19%).'),
(6, 'Impuestos IVA t', 'El servicio de transporte público, terrestre, fluvial y marítimo de personas en el territorio nacional excluido del IVA.'),
(7, 'Servicio o Propina', 'En Ningún caso la propina podrá superar el 10% del valor facturado, antes de impuestos, al momento de realizar el pago correspondiente.  Se debe informar a los consumidores acerca de los precios y de la voluntariedad de la propina, así como del correlativo derecho que les asiste de no pagarla o de modificar su cuantía cuando ésta  les sea sugerida. 1. Se aplica a los establecimientos de comercio dedicados a la prestación de servicio de consumo de alimentos, bebidas y/o espectáculos públicos, y en cualquier otro en que se sugiera pago de propina.\r\n2. La propina se entiende como la suma de dinero que por sentido de liberalidad y en forma voluntaria, el usuario o cliente de alguno de los establecimientos, como demostración de agradecimiento por el servicio recibido, independientemente del valor que deba pagar por el mismo.\r\n3. Se prohíbe a los propietarios y/o administradores (…) destinar alguna parte de ellas (de las propinas) a gastos que por su naturaleza le corresponden al establecimiento, tales como reposición de elementos de trabajo, pago de turnos, reposiciones de inversión o cualquier otra que no corresponda al pago del trabajador.Ley 1935 de agosto de 2018.'),
(8, 'Retención en la Fuente por Prestación de \r\nServicios.\r\n', 'Servicio de Hoteles , Restaurantes y Hospedajes. DECLARANTES Y NO DECLARANTES si el pago se hace en forma directa personas jurídicas o sociedades de hecho o persona natural agente retenedor (Dcto 260 de 2001 Art. 4), Dcto 1020 de 2014. (4 UVT) BASE DE RETENCIÓN $ 133.000 TARIFA 3.5%'),
(9, 'Retención en la Fuente por Honorarios y Comisiones', 'BASE DE RETENCIÓN $ 1 TARIFA 11%'),
(10, 'Retención en la Fuente por Honorarios y Comisiones a Personas Naturales No Declarantes', 'BASE DE RETENCIÓN $ 1 TARIFA 10%'),
(11, 'Retención en la Fuente por Arrendamientos', 'Arrendamiento de Bienes Muebles. BASE DE RETENCIÓN $ 1, TARIFA 4%'),
(12, 'Retención en la Fuente por Arrendamientos 2', 'Arrendamiento de Bienes Inmuebles.(Bienes Raíces) DECLARANTES Y NO DECLARANTES. BASE DE RETENCIÓN $895.000 TARIFA 3.5%'),
(13, 'RETENCIÓN DEL IVA', 'Servicios gravados con IVA. BASE DE RETENCIÓN $133.000 TARIFA 15% IVA'),
(14, 'RETEICA BOGOTÁ', 'Retención de INDUSTRIA Y COMERCIO BOGOTÁ Servicios gravados $133.000 ó sup \r\nTARIFA 13.8 %, si los servicios se prestan en la ciudad de Bogotá y si la sede principal de la Empresa, a la que se le va a facturar está ubicada en la ciudad de Bogotá.\r\n'),
(15, 'LEY 300 DE 1996         ARTÍCULO 79 DEL CONTRATO DE HOSPEDAJE.', 'El contrato de hospedaje es un contrato de arrendamiento, de carácter comercial y de adhesiòn, que una empresa dedicada a esta actividad celebra con el propòsito principal de prestar alojamiento a otra persona denominada huésped, mediante  el pago del precio respectivo día a día, por un plazo inferior a 30 días.'),
(16, 'LEY 300 DE 1996         ARTÍCULO 81 DE LA PRUEBA DE CONTRATO DE HOSPEDAJE', 'El contrato de hospedaje se probarà mediante la Tarjeta de Registro hotelero, en el cual se identificarà el huésped y sus acompañantes quienes responderàn solidariamente con sus obligaciones. PARÀGRAFO. Las facturas expedidas por los prestadores de servicios turísticos debidamentes firmadas  por el cliente o usuario se asimilaràn a la factura cambiaria.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `documento` bigint(13) NOT NULL,
  `primer_nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `segundo_nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `primer_apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `segundo_apellido` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` char(2) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'no',
  `fecha_actividad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rol` varchar(45) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Estandar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `password`, `activo`, `fecha_actividad`, `rol`) VALUES
(11, 'Administrador', NULL, 'Principal', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'si', '2018-10-15 15:35:18', 'Administrador'),
(1012324447, 'Jhon ', 'Mauricio', 'Moreno', 'García', 'e10adc3949ba59abbe56e057f20f883e', 'si', '2018-10-15 17:08:31', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idreceta` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `porciones` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idreceta`, `nombre`, `porciones`, `tipo`, `imagen`) VALUES
(7, 'CROQUETAS CON JAMÓN Y QUESO', '10', 'Refrigerio', 'imagenes/7.jpg'),
(8, 'ARROZ DE LECHE', '10', 'Refrigerio', 'imagenes/8.jpg'),
(9, 'Jugo de mandarina', '10', 'Refrigerio', 'imagenes/9.jpg'),
(10, 'JUGO DE MANGO', '10', 'Refrigerio', 'imagenes/10.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sociedades`
--

CREATE TABLE `sociedades` (
  `id_soc` int(11) NOT NULL,
  `sociedades` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `des_soc` varchar(2200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sociedades`
--

INSERT INTO `sociedades` (`id_soc`, `sociedades`, `des_soc`) VALUES
(1, 'Sociedades por Acciones -S.A.-', 'Constitución, transformación y Disolución: A través de Escritura Pública ante Notario o por Documento privado siempre y cuando cumpla con alguno de los dos requisitos de la ley 1014 de 2006. \r\nNúmero de accionistas: Mínimo 5 accionistas y no tiene un límite máximo. \r\nSu capital social se divide: en acciones. Las acciones son libremente negociables, con las excepciones previstas en el artículo 403 y 381 C.Co. \r\nFormación del Capital: 1. Autorizado: Cuantía fija que determina el tope máximo de capitalización de la sociedad 2. Suscrito: La parte del capital autorizado que los accionistas se comprometen a pagar a plazo (máximo 1 año) y debe ser al momento de su constitución no menos de la mitad del autorizado. 3. Pagado: La parte del suscrito que los accionistas efectivamente han pagado y que ha ingresado a la sociedad. \r\nResponsabilidad de los accionistas: Responden hasta el monto de sus aportes por las obligaciones sociales (Artículo 373 del Código de Comercio 794 E.T. Inciso 2). \r\nRevisor Fiscal: Es obligatorio tenerlo, sin importar sus patrimonio. \r\nTambién debemos tener en cuenta que: 1. Si se creó por escritura debe disolverse por escritura y liquidarse por acta. 2. Si se creó por documento privado se puede disolver y liquidar por acta. 3. Si se va a transformar solo a SAS lo puede hacer por acta. 4. Si se va a transformar a otra sociedad lo debe hacer por escritura.'),
(2, 'Sociedades por Acciones Simplificadas -S.A.S.-', 'Constitución, transformación y Disolución: A través de Escritura Pública ante Notario o a través de Documento Privado, a menos que ingrese un bien sujeto a registro, caso en el cual la constitución se debe hacer mediante Escritura Pública ante Notario. \r\nNúmero de accionistas: Mínimo 1 accionista y no tiene un límite máximo. \r\nSu capital social se divide: En acciones. Las acciones son libremente negociables, pero puede por estatutos restringirse hasta por 10 años su negociación, (por eso se dice que es un modelo ideal para sociedades de familias). \r\nFormación del Capital: Autorizado: Cuantía fija que determina el tope máximo de capitalización de la sociedad 1. Suscrito: La parte del capital autorizado que los accionistas se comprometen a pagar a plazo (máximo en 2 años), al momento de su constitución no es necesario pagar, pues se puede pagar hasta en 2 años, la totalidad suscrita. 2. Pagado: La parte del suscrito que los accionistas efectivamente han pagado y que ha ingresado a la sociedad. \r\nResponsabilidad de los accionistas: Responden hasta el monto de sus aportes por las obligaciones sociales. Si la SAS es utilizada para defraudar a la ley o en perjuicio de terceros, los accionistas y los administradores que hubieren realizado, participado o facilitado los actos defraudatorios, responderán solidariamente por las obligaciones nacidas de tales actos y por los perjuicios causados, más allá del monto de sus aportes. \r\nRevisor Fiscal: Es Voluntario, pero si tiene Activos Brutos a 31 de diciembre del año anterior iguales o superiores a 5.000 s.m.m.l.v. y/o cuyos ingresos brutos sean o excedan a 3.000 s.m.m.l.v., será obligatorio tenerlo.'),
(3, 'Sociedad de Responsabilidad Limitada –LTDA', 'Constitución, transformación y Disolución: A través de Escritura Pública ante Notario o por Documento privado siempre y cuando cumpla con alguno de los dos requisitos de la ley 1014 de 2006. \r\nNúmero de Socios: Mínimo de socios 2, máximo 25. \r\nFormación del Capital: 1. El capital se divide en cuotas o partes de igual valor. 2. El capital debe pagarse totalmente al momento de constituirse. 3. La cesión de cuotas implica una reforma estatutaria. 4. En caso de muerte de uno de un socio, continuará con sus herederos, salvo estipulación en contrario. 5. La representación está en cabeza de todos los socios, salvo que éstos la deleguen en un tercero. \r\nResponsabilidad de los Socios: Responden solamente hasta el monto de sus aportes. No obstante, en los estatutos podrá estipularse para todos o algunos de los socios una mayor responsabilidad (Naturaleza, cuantía, duración y modalidad de responsabilidad adicional), sin comprometer una responsabilidad indefinida o ilimitada (artículo 353 C.Co.). Nota: La excepción en la responsabilidad en las “Ltda” es la solidaridad respecto de las obligaciones laborales y fiscales a cargo de la compañía, por lo que se perseguirá solidariamente los bienes del patrimonio de cada socio. \r\nRevisor Fiscal: Es Voluntario, pero si tiene Activos Brutos a 31 de diciembre del año anterior iguales o superiores a 5.000 s.m.m.l.v. y/o cuyos ingresos brutos sean o excedan a 3.000 s.m.m.l.v., será obligatorio tenerlo.'),
(4, 'Sociedad Comanditaria (Simple o por Acciones)', 'Constitución, transformación y Disolución: A través de Escritura Pública ante Notario o por Documento privado siempre y cuando cumpla con alguno de los dos requisitos de la ley 1014 de 2006. \r\nNúmero de socios en la C. Simple: Mínimo 2, no tiene un límite máximo. Número de accionistas en la C. por Acciones: Mínimo 5, no tiene un límite máximo. Se integra con 2 categorías de socios, Gestores/Colectivos y los Comanditarios. 1. Gestores administran, NO es necesario que den algún tipo de aporte. 2. Comanditarios hacen los aportes. 3. La Razón Social se forma con el nombre completo o el solo apellido de uno o más socios colectivos, acompañado de “& Cía.”, y seguida siempre con las abreviaturas “S. en C.” para las simples y si es por acciones “S. C. A.” \r\nResponsabilidad de los Socios: Los socios Gestores comprometen solidaria e ilimitadamente su responsabilidad por las operaciones sociales (No tienen que hacer aportes) Los socios Comanditarios limitan su responsabilidad hasta el monto de sus aportes (Artículo 323 C.Co.) Responsabilidad de los Accionistas en la Comandita por Acciones siguen las reglas que se establecen para las Sociedades Anónimas. \r\nRevisor Fiscal: Es Voluntario en las Comanditas Simples, pero si tiene Activos Brutos a 31 de diciembre del año anterior iguales o superiores a 5.000 s.m.m.l.v. y/o cuyos ingresos brutos sean o excedan a 3.000 s.m.m.l.v., será obligatorio tenerlo. En las Comanditas por Acciones, será obligatorio tenerlo, sin importar su patrimonio.'),
(5, 'Sociedad Colectiva', 'Constitución, transformación y Disolución: A través de Escritura Pública ante Notario o por Documento privado siempre y cuando cumpla con alguno de los dos requisitos de la ley 1014 de 2006. \r\nNúmero de socios: Mínimo 2 socios, no tiene límite de máximo. 1. El capital se paga todo al momento de constituirse. 2. El capital social se divide en partes de interés social. 3. \r\nLa Razón Social: nombre completo o el solo apellido de alguno o algunos de los socios: Suárez “& Cia.”, Duarte “y hermanos”, Vargas “e hijos” 4. La administración corresponde a todos y a c/u uno de los socios, aunque se puede delegar en uno o en un 3º. \r\nSe disuelve: 1. Muerte/incapacidad en socio y no se ha previsto en estatutos la continuidad con herederos o los demás socios. 2. La declaración de quiebra de un socio, si los demás no adquieren su interés social o no aceptan la cesión a un tercero. 3. Embargo y remate del interés de un socio en favor de un 3º, si los demás asociados no aceptan al adquirente. 4. Renuncia/retiro justificado de un socio, y los demás no adquieren su interés o no aceptan su cesión a un tercero. \r\nResponden los socios: 1. Responden solidaria e ilimitadamente por operaciones sociales. 294 Código de Comercio 2. En lo laboral Artículo 36 C.S.T: son solidariamente responsables de las obligaciones laborales y sólo hasta el límite de la responsabilidad de cada socio (No Confundir) 3. En lo tributario Artículo 794, inc 1º E.T.: los socios responderán solidariamente por impuestos, actualizaciones e intereses a prorrata de su aporte durante el respectivo periodo gravable. 4. Cuando hay cesión, el cedente NO queda liberado de las obligaciones anteriores, sino 1 año después de la inscripción de cesión. (artículo 301 Código Comercio) Revisor Fiscal: Es Voluntario, pero si tiene Activos Brutos a 31 de diciembre del año anterior iguales o superiores a 5.000 s.m.m.l.v. y/o cuyos ingresos brutos sean o excedan a 3.000 s.m.m.l.v., será obligatorio tenerlo. Debemos recordar que el decreto 4463 de 2006 nos indica que podrán constituirse sociedades por documento privados todas aquellas excepto las comanditarias.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipologia`
--

CREATE TABLE `tipologia` (
  `idtipologia` int(11) NOT NULL,
  `tipologia` varchar(45) NOT NULL,
  `descripcion` varchar(1323) NOT NULL,
  `requerimientos` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipologia`
--

INSERT INTO `tipologia` (`idtipologia`, `tipologia`, `descripcion`, `requerimientos`) VALUES
(1, 'Conferencia', 'Reunión formal, oficial, al nivel más elevado de un cuerpo constitucional donde se estudian problemas de interés nacional o internacional, con el fin de solucionarlos, elaborar acuerdos, tratados y tomar decisiones.--Exposición de un tema particular por parte de un experto ante un auditorio, con el fin de compartir el conocimiento y la experiencia de un especialista con asistentes interesados.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(2, 'Asamblea', 'Reunión formal, estatutaria, ordinaria o extraordinaria de los miembros pertenecientes a una misma empresa o asociación, con el fin de estudiar problemas que afecten a la empresa o asociación, tomar decisiones y aprobar cambios.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(3, 'Comité - Comisión', 'Reunión formal de un órgano de control o consulta, en la mayoría de los casos prevista estatutariamente, para tratar un tema determinado. También se define como una sesión de trabajo de una reunión, encargada de tratar una parte del programa ordinario y de trasmitir las conclusiones a la plenaria, para su eventual aprobación. En ambos casos, se busca mayor agilidad en el desarrollo del programa y aportar recomendaciones y alternativas para tomar decisiones sobre un tema particular.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(4, 'Coloquio', 'Reunión semiformal multidisciplinaria, constituida por un grupo de especialistas invitados a título personal por una entidad para tratar un tema específico, con el fin de analizar un tema particular con la participación de expertos con el fin de profundizar su conocimiento, buscando una participación activa de los expositores. No necesariamente se llega a un acuerdo.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(5, 'Panel', 'Reunión no formal en la cual dos o más conferencistas manifiestan sus puntos de vista sobre un tema determinado, con discusión entre ellos. Permite la participación de una audiencia por medio de preguntas. Se busca analizar un tema particular con la participación de expertos, con el fin de profundizar su conocimiento, buscando una participación activa de los asistentes. No necesariamente debe llegarse a un acuerdo.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(6, 'Simposio', 'Reunión no formal en la cual dos o más conferencistas manifiestan sus puntos de vista sobre un tema determinado, sin discusión entre ellos. Permite la participación de una audiencia por medio de preguntas. Se busca analizar un tema particular con la participación de expertos, con el fin de profundizar su conocimiento, buscando una participación activa de los asistentes. No necesariamente se llega a un acuerdo.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(7, 'Foro', 'Reunión bastante informal en la que un grupo de personas trata un tema de interés específico. Se permite a la audiencia expresarse libremente sobre un tema específico para el enriquecimiento de su propio conocimiento.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(8, 'Seminario', 'Reunión formal de carácter educativo, asimilable a una práctica de estudio o de perfeccionamiento. Debe ser lo más práctica posible, si el tema lo permite. El fin es impartir conocimiento o beneficiar a los participantes con la experiencia de expertos sobre un tema particular.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(9, 'Reunión empresarial', 'Reuniones limitadas a personas de una misma entidad. Su objetivo es actualizar a los participantes sobre aspectos internos de la empresa, tratar problemas específicos y dar soluciones a los mismos.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(10, 'Viajes de incentivo', 'Reunión limitada a personas de una empresa o sociedad comercial, sin ningún tipo de actividad académica. Es un premio a las personas de la empresa por el cumplimiento de unas metas preestablecidas.', 'Locación,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Hospedaje,Transporte,Otros requerimientos'),
(11, 'Viajes de familiarización', 'Reuniones a las que se invita a un grupo de personas para que visiten una o varias organizaciones y conozcan sus facilidades. El objeto es dar a conocer los bienes y servicios de las organizaciones mencionadas, con el fin de que los participantes los puedan vender posteriormente.', 'Locación,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Hospedaje,Transporte,Otros requerimientos'),
(12, 'Congreso/Convención', 'Reunión generalmente periódica que trata un tema de interés particular, tiene una participación abierta a todo el que le interese, requiere gran cantidad de servicios, alterna dentro de su programa actividades recreativas y turísticas, por lo general trabaja con comités y sesiones generales y su proceso de organización, desarrollo y conclusiones están destinadas a recibir gran publicidad. Su objeto incluye el permitir el intercambio y asimilación de ideas, información y conocimiento técnico entre personas que tienen los mismos intereses. El término convención es más utilizado con vocación privada, generalmente organizado por una sola empresa, con una duración mínima de dos días y al menos cincuenta participantes. Las convenciones están orientadas a la generación de negocio y lo habitual es que tan solo asistan miembros de la empresa o empresas organizadoras. El término congreso es más utilizado por miembros de una asociación, cuerpo, organismo, profesión, etc., que se reúnen para debatir cuestiones previamente fijadas. Entre las características principales podemos destacar: la exposición y debate de múltiples ponencias, asistencia de personas con un alto nivel profesional, intereses comunes, presentaciones de nuevos avances o descubrimientos en determinadas materias, etc. Su duración es de 3 a 5 días.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Hospedaje,Transporte,Otros requerimientos'),
(13, 'Reuniones sociales', 'Reuniones formales o informales donde se celebran ciertos acontecimientos especiales. Generalmente requieren de excelentes servicios de alimentos y bebidas. Se organizan para celebrar convenientemente un acontecimiento especial como: nacimientos, bautizos, primeras comuniones, confirmaciones, cumpleaños, grados, fiestas en casa, navidades, bodas, velorios, etc.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(14, 'Festivales', 'Reuniones que promueven programas o actividades relacionadas con las artes escénicas o la gastronomía. Por lo general conllevan una premiación. Tradicionalmente muestran las características de una actividad del arte o la gastronomía, con el fin de promover dicha actividad.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(15, 'Eventos deportivos', 'Eventos de actividad física y mental que presuponen entrenamiento y competencia. Su objetivo es estimular las actividades físicas y mentales mediante la realización de prácticas y competencias deportivas.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(16, 'Taller (Workshop).', 'Reunión de varias personas con un programa de debate intensivo, destinado a crear destrezas, desarrollar habilidades y a solucionar problemas mediante el esfuerzo y la cooperación integral de facilitadores y participantes. El concepto de taller se ha desarrollado para compensar los puntos de vista divergentes en una disciplina o en un tema en particular. Incorpora a los elementos que caracterizan al seminario el aspecto práctico. También se conoció esta técnica como seminario de trabajo, término ya en desuso. NORMA TÉCNICA SECTORIAL NTS-OPC 001 13 Esta técnica es muy recomendada en programas de entrenamiento, ya que permite aprender – haciendo sobre un tópico especifico. También se usa mucho entre grupos de profesionales que se reúnen en una mesa de trabajo, bajo la conducción de un facilitador y con el apoyo de un secretario y de un asesor, con el propósito de mejorar su eficacia en disciplinas específicas o en procedimientos interdisciplinarios que contribuyen a la solución de un problema. Su objetivo es estudiar un tema o tópico en forma intensiva para crear destrezas, desarrollar habilidades y solucionar problemas y su tiempo: Promedio de dos días.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(17, 'Curso.', 'En los centros docentes, tiempo señalado en cada año para asistir a oír las lecciones. Serie de lecciones que forman la enseñanza de una materia. Tratado especial. Pueden preverse, antes (pre), durante o después (post), de un evento. Generalmente aparecen como parte del programa profesional de un congreso. La materia que se aborde en el curso debe corresponderse con las temáticas del evento. Casi siempre se organizan como cursos de postgrado y su objetivo: central es analizar conceptualmente un tema con la utilización de técnicas pedagógicas.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(18, 'Mesa redonda', 'Reunión de expertos que analizan un tema con enfoques divergentes, ante un público de conocedores y especialistas. Lo más peculiar de la mesa redonda es que trata enfoques distintos sobre un mismo tema, confrontar puntos de vista diferentes y opuestos estimulando la unión para resolver un problema, sopesar ventajas y desventajas. Su objetivo central es analizar objetivamente un tema y su tiempo: promedio de dos horas, incluyendo preguntas y respuestas.', ''),
(19, 'Reunión', 'Término generalmente que indica el encuentro de un determinado número de personas en un lugar para realizar una actividad específica. Puede producirse espontáneamente o de acuerdo con un programa preestablecido.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(20, 'Convención', 'Ejercen fuerte influencia en el turismo de convenciones por el volumen e importancia de sus operaciones. Ejercen influencia sobre las relaciones internacionales, ya que en ellas se abordan problemas de la producción, ventas y mercados. Frecuentemente se usan para exponer en ella los nuevos productos y/o servicios de una empresa. Pueden ser corporativas, institucionales, empresariales, etc. Son deliberantes, es decir, aprueban. Se manifiesta también en el área comercial o industrial, donde participan ejecutivos, empleados y agentes de cualquier empresa. Otra clasificación: Evento formal con base jurídica, al cual asisten los que tienen un derecho adquirido, con el fin de analizar situaciones de su propio interés. Su origen es diplomático y se refiere a acuerdos entre estados soberanos sobre asuntos de su conveniencia.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(21, 'Debate', 'Es un evento en el que dos o más partes discuten sobre aspectos controvertibles en el que al final se sostienen soluciones parciales o totalmente diferentes.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(22, 'Encuentro', 'Evento que consiste en permitir que personas con algo en común, que ocurrió en algún momento del pasado, no cercano, se encuentren para celebrar este acontecimiento.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(23, 'Jornada.', 'Es un evento que consiste en una serie de actividades destinadas a “impartir instrucciones o información específica en sectores particulares del trabajo”.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(24, 'Charla', 'Explicación de un experto sobre un tema o tópico que domina, el cual explica de una manera informal, exenta de solemnidad. El tiempo no debe ser mayor de una hora.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(25, 'Banquete', 'Cena de carácter formal en la que se exige presentación de etiqueta. Se utiliza generalmente como complemento o formando parte de un evento mayor para agasajar a personalidades importantes. En otros países, el banquete es utilizado también para recaudar fondos a determinados proyectos determinándose a través del precio del cubierto -manera de cobrar la participación por persona- y acciones promociónales previas la participación de públicos que generalmente son afines como grupo social.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(26, ' Concurso', 'Se estimula la participación de un público en específico, con el fin de que produzca algún elemento que será objeto de análisis comparativo, a través de ítemes preestablecidos, y del que surgirá un ganador que obtendrá un beneficio previamente señalado. Muy usado por organizaciones para estimular la creatividad, proveer a la entidad de algún símbolo, incentivar simbólicamente a alguien creando predisposición favorable ante un producto o entidad, y como respaldo de algún otro evento mayor. De empleo frecuente en el trabajo de relaciones públicas.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(27, 'Festival', 'Concebido originaria o comúnmente para programas relacionados con las artes, orientado a fines promociónales, lleva frecuentemente un reconocimiento final, como premio. El festival conlleva a un fin de entretenimiento y de promoción de artes en un ámbito especializado o regional determinado. Existen diferentes puntos de vista sobre el hecho de que no cubre una finalidad comercial, y que sus costos se sufragan con los precios de las butacas o las entradas a conciertos y otras representaciones y/o el patrocinio.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(28, 'Pleno- plenaria', 'Sesión en la que se reúnen los miembros de una organización para atender los señalados de un programa. Se utiliza frecuentemente por organizaciones políticas y sindicales para resolver situaciones que le atañen. Esta modalidad se emplea frecuentemente complementando eventos académicos de mayor envergadura, propiciando a través del pleno la presentación de problemas pre-analizados para resolver en el pleno como paso final.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(29, 'Premiación', 'Ocasión en que una entidad o firma otorga públicamente distinciones a ganadores o reconocimientos significativos a personas por razones de concurso, merito, o resultados. Suele caracterizarse por una actividad solemne y posteriormente un festejo de agasajo a los premiados. Participan eminentemente los medios de comunicación.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(30, 'Rueda de prensa', 'Modalidad de entrevista en la que un personaje de actualidad convoca a varios periodistas para dar a conocer un hecho y someterse a preguntas de los informadores. Es un evento convocado por una organización o un personaje para informar a la opinión pública a través de los periódicos y sus medios, aspectos trascendentales de int', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(31, 'Conferencia de prensa', 'Reunión de periodistas especializados con un personaje, quien convoca a los informadores, realiza una exposición del tema y se somete a las preguntas sobre lo expuesto. Puede ser un comunicado oficial que se facilita a los periodistas convocados. Tanto las ruedas como las conferencias de prensa se emplean generalmente en situaciones de crisis, fusiones de compañías o adquisiciones, o para dar a conocer miembros nuevos de la organización, programas, lanzamientos, etc.', 'Locación,Facilidades técnicas,Mobiliario,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(32, 'Salón', 'Evento identificado por la exhibición de obras de arte, comúnmente empleados por instituciones culturales tales como museos, galerías y otras. Tiene un fin promocional de obras artísticas', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(33, 'Exposición comercial', 'Exposición cuya finalidad y objetivo principal es promover o vender productos y/o servicios.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(34, ' Exposiciones  asociadas', 'Muestras que, con carácter comercial o promocional, organizan las instituciones organizadoras del evento. Consiste fundamentalmente en pequeñas muestras, no tan voluminosas, generalmente catálogos, pequeños equipos, información, a diferencia de las realmente comerciales. El evento es la actividad fundamental y la exposición asociada es complementaria, aunque hay casos en que ocurre a la inversa.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(35, 'Activación de marca', 'Actividad en la cual una marca expone sus productos o servicios de forma interactiva o de periencia con el público objetivo.', 'Locación,Facilidades técnicas,Mobiliario,Publicidad BTL/ATL,Personal/RRHH,Menaje,Alimentos y bebidas,Otros requerimientos'),
(36, 'Otra', '                  Otra          ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_evento`
--

CREATE TABLE `tipo_evento` (
  `idtipo_evento` int(11) NOT NULL,
  `tipo_evento` varchar(45) NOT NULL,
  `descripcion_tipo_evento` varchar(200) NOT NULL DEFAULT '"N/R"',
  `idtipologia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_evento`
--

INSERT INTO `tipo_evento` (`idtipo_evento`, `tipo_evento`, `descripcion_tipo_evento`, `idtipologia`) VALUES
(1, 'Conferencia', 'N/R', 1),
(2, 'Tele o video conferencia', 'N/R', 1),
(3, 'Asamblea', 'N/R', 2),
(4, 'Comité - Comisión', 'N/R', 3),
(5, 'Coloquio', 'N/R', 4),
(6, 'Panel', 'N/R', 5),
(7, 'Simposio', 'N/R', 6),
(8, 'Foro', 'N/R', 7),
(9, 'Seminario', 'N/R', 8),
(10, 'Reunión empresarial', 'N/R', 9),
(11, 'Viajes de incentivo', 'N/R', 10),
(12, 'Viajes de familiarización', 'N/R', 11),
(13, 'Congreso/Convención', 'N/R', 12),
(14, 'Aniversario', 'N/R', 13),
(15, 'Cumpleaños', 'N/R', 13),
(16, 'Bautizo', 'N/R', 13),
(17, 'Primera comunión', 'N/R', 13),
(18, 'Matrimonio', 'N/R', 13),
(19, 'Compormiso', 'N/R', 13),
(20, 'Shower', 'N/R', 13),
(21, 'Despedidas', 'N/R', 13),
(22, 'Grados', 'N/R', 13),
(23, 'Velorio', 'N/R', 13),
(24, 'Festivales', 'N/R', 14),
(25, 'Eventos deportivos', 'N/R', 15),
(26, 'Taller (Workshop)', 'N/R', 16),
(27, 'Curso', 'N/R', 17),
(28, 'Barinstorming o tormenta de ideas', 'N/R', 19),
(29, 'Desayuno de trabajo', 'N/R', 19),
(30, 'Convención', 'N/R', 20),
(31, 'Debate', 'N/R', 21),
(32, 'Encuentro', 'N/R', 22),
(33, 'Jornada', 'N/R', 23),
(34, 'Charla', 'N/R', 24),
(35, 'Banquete', 'N/R', 25),
(36, 'Concurso', 'N/R', 26),
(37, 'Pleno-plenaria', 'N/R', 28),
(38, 'Premiación', 'N/R', 29),
(39, 'Ruedas de prensa', 'N/R', 30),
(40, 'Conferencia de prensa', 'N/R', 31),
(41, 'Salón', 'N/R', 32),
(42, 'Desfile de moda', 'N/R', 33),
(43, 'Lanzamiento de producto', 'N/R', 33),
(44, 'Showroom', 'N/R', 33),
(45, 'Exposiciones asociadas', 'N/R', 34),
(46, 'Activación de marca', 'N/R', 35),
(47, 'Otra', 'Otra', 18),
(48, 'Otra', 'Otra', 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`idalimentos`);

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`idbebidas`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`idclasificacion`);

--
-- Indices de la tabla `clasificacion_por_tipo`
--
ALTER TABLE `clasificacion_por_tipo`
  ADD PRIMARY KEY (`idclasificacion`,`idtipo_evento`),
  ADD KEY `fk_this_tipo_evento_idx` (`idtipo_evento`),
  ADD KEY `fk_this_clasificacion_idx` (`idclasificacion`);

--
-- Indices de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`idingrediente`);

--
-- Indices de la tabla `ingrediente_por_receta`
--
ALTER TABLE `ingrediente_por_receta`
  ADD PRIMARY KEY (`receta_idreceta`,`ingrediente_idingrediente`),
  ADD KEY `fk_receta_has_ingrediente_ingrediente1` (`ingrediente_idingrediente`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`idreceta`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `tipologia`
--
ALTER TABLE `tipologia`
  ADD PRIMARY KEY (`idtipologia`);

--
-- Indices de la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD PRIMARY KEY (`idtipo_evento`),
  ADD KEY `IX_TIPOLOGIA_TIPO_EVENTO` (`idtipologia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `idalimentos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `idbebidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `idclasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  MODIFY `idingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `idreceta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipologia`
--
ALTER TABLE `tipologia`
  MODIFY `idtipologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `idtipo_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clasificacion_por_tipo`
--
ALTER TABLE `clasificacion_por_tipo`
  ADD CONSTRAINT `fk_this_clasificacion` FOREIGN KEY (`idclasificacion`) REFERENCES `clasificacion` (`idclasificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_this_tipo_evento` FOREIGN KEY (`idtipo_evento`) REFERENCES `tipo_evento` (`idtipo_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingrediente_por_receta`
--
ALTER TABLE `ingrediente_por_receta`
  ADD CONSTRAINT `fk_receta_has_ingrediente_ingrediente1` FOREIGN KEY (`ingrediente_idingrediente`) REFERENCES `ingrediente` (`idingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_receta_has_ingrediente_receta` FOREIGN KEY (`receta_idreceta`) REFERENCES `receta` (`idreceta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD CONSTRAINT `fk_tipologia_tipo_evento` FOREIGN KEY (`idtipologia`) REFERENCES `tipologia` (`idtipologia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
