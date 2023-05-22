<?php
  // IMPORTACIONES
  $json_banners = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/TurismoPOP/data/banners.json');
  $banners = json_decode($json_banners, true);
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TurismoPOP - Quienes somos</title>
  <link rel="shortcut icon" href="/TurismoPOP/assets/img/logos/logo_trans.png" type="image/x-icon">
  <body class="d-flex flex-column h-100"  style="min-height: 100vh;"> 
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/imports.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/header.php"; ?>
<!-- Titulo -->
<?php
  $randomImage = $banners['ads'][array_rand($banners['ads'])]['img'];
?>
<div class="container mt-3" style="background-image: url('<?php echo $randomImage; ?>'); background-size: cover; min-height: 200px;">
  <div class="row align-items-center justify-content-center" style="min-height: 200px;">
      <div class="col-12 text-center">
        <h1 class="text-black-stroke text-white font-weight-bold">Quienes somos</h1>
      </div>
  </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-4 d-flex align-items-center justify-content-center">
        <img src="/TurismoPOP/assets/img/logos/logo_turismopop_transparente.png" alt="Logo TurismoPOP">
    </div>
        <div class="col-8">
            <h1 class="text-info">Quienes somos?</h1>
            <p>
                <ul>
                    <li>Turismo POP es una empresa de turismo con sede en la localidad de Quilmes, provincia de Buenos Aires, Argentina. Nos dedicamos a la venta de paquetes turísticos para toda la Argentina, ofreciendo una amplia gama de opciones para que nuestros clientes puedan disfrutar de la belleza y diversidad del país.</li>
                    <li>En Turismo POP, compren que cada viajero es único y tiene necesidades y preferencias específicas. Por eso, trabajan en estrecha colaboración con sus clientes para comprender sus intereses y ofrecer paquetes turísticos personalizados y a medida. Se enfocan en ofrecer experiencias únicas y auténticas que permitan a sus clientes descubrir los destinos más bellos y fascinantes de Argentina.</li>
                    <li>Sus servicios incluyen la planificación y organización de viajes, la reservación de alojamiento, el transporte y la coordinación de actividades y excursiones. Se aseguran de que cada detalle del viaje esté cuidadosamente planificado y coordinado, para que sus clientes puedan relajarse y disfrutar de su experiencia de viaje.</li>
                    <li>En Turismo POP, se enorgullecen ofrecer paquetes turísticos de alta calidad y experiencias únicas que satisfagan las necesidades y expectativas de sus clientes.</li>
                </ul>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-info">Misión y Visión</h1>
            <p><b>Misión:</b>
            En TurismoPop, nuestra misión es brindar experiencias de viaje inolvidables y de alta calidad a nuestros clientes, permitiéndoles descubrir y disfrutar de los diversos destinos turísticos de Argentina. Nos esforzamos por ser una agencia de turismo confiable y líder en el mercado nacional, ofreciendo un servicio personalizado y adaptado a las necesidades individuales de cada cliente. Buscamos promover el turismo interno, fomentando el conocimiento y la apreciación de la riqueza cultural, natural y patrimonial de nuestro país.
            </br>
            <b>Visión:</b>
            En TurismoPop, aspiramos a ser reconocidos como un referente en la industria del turismo en Argentina. Nuestra visión es expandirnos y consolidarnos como una agencia de viajes reconocida a nivel nacional, ofreciendo una amplia gama de destinos y servicios turísticos de calidad. Buscamos superar las expectativas de nuestros clientes, ofreciendo experiencias únicas y personalizadas, y manteniendo un enfoque sostenible y responsable con el medio ambiente y las comunidades locales en las que operamos. Además, nos esforzamos por ampliar nuestros horizontes y proporcionar a nuestros clientes oportunidades de viaje excepcionales a destinos internacionales seleccionados.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-info">Valores</h1>
            <p>En TurismoPop, nos regimos por los siguientes valores fundamentales que guían nuestra forma de trabajar y relacionarnos con nuestros clientes, colaboradores y socios:
            <ul>
                <li>Excelencia: Buscamos la excelencia en cada aspecto de nuestro trabajo, desde la planificación y organización de los viajes hasta la atención al cliente. Nos esforzamos por ofrecer servicios y experiencias turísticas de la más alta calidad, superando las expectativas de nuestros clientes.</li>
                <li>Integridad: Actuamos con honestidad, transparencia y ética en todas nuestras operaciones. Valoramos la confianza de nuestros clientes y nos comprometemos a cumplir nuestras promesas, respetando los acuerdos establecidos y manteniendo la confidencialidad de la información compartida.</li>
                <li>Personalización: Reconocemos que cada cliente es único y tiene necesidades y preferencias individuales. Nos esforzamos por ofrecer un servicio personalizado, adaptando nuestras propuestas y recomendaciones a los intereses específicos de cada viajero.</li>
                <li>Responsabilidad social y ambiental: Promovemos un enfoque sostenible en nuestras operaciones y viajes. Nos comprometemos a minimizar el impacto ambiental, fomentar la conservación de los recursos naturales y culturales, y contribuir al desarrollo y bienestar de las comunidades locales.</li>
                <li>Pasión por el viaje: Nos apasiona el mundo del turismo y creemos en el poder transformador de los viajes. Compartimos esa pasión con nuestros clientes, brindándoles experiencias inolvidables y despertando su curiosidad y amor por la exploración y el descubrimiento.</li>
                <li>Colaboración y trabajo en equipo: Valoramos la colaboración y el trabajo en equipo, tanto dentro de nuestra agencia como con nuestros socios y proveedores. Fomentamos un ambiente de respeto, comunicación abierta y apoyo mutuo, reconociendo que juntos podemos lograr más y ofrecer mejores servicios a nuestros clientes.</li>
            </ul>
            Estos valores son los cimientos de nuestra agencia de turismo y nos guían en cada decisión y acción que tomamos, permitiéndonos brindar un servicio excepcional y establecer relaciones duraderas con nuestros clientes y colaboradores.
        </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-info">Políticas de calidad</h1>
            <p>En TurismoPop, nos comprometemos a proporcionar servicios turísticos de alta calidad y a satisfacer las necesidades y expectativas de nuestros clientes. Para lograrlo, nos comprometemos a:
            <ol>
                <li>Entender las necesidades de nuestros clientes: Nos esforzamos por comprender y anticipar las necesidades, deseos y preferencias de nuestros clientes, a través de una comunicación clara y abierta. Buscamos brindar un servicio personalizado y adaptado a cada cliente, asegurándonos de que sus expectativas sean atendidas y superadas.</li>
                <li>Mejora continua: Promovemos una cultura de mejora continua en todos los aspectos de nuestras operaciones. Buscamos identificar oportunidades de mejora en nuestros procesos, servicios y la experiencia del cliente, y tomamos medidas para implementar mejoras de manera sistemática y eficiente.</li>
                <li>Selección de proveedores confiables: Nos aseguramos de seleccionar proveedores y socios confiables y de calidad, que compartan nuestros estándares de excelencia y estén comprometidos con la satisfacción del cliente. Mantenemos relaciones sólidas con nuestros proveedores para garantizar la calidad y confiabilidad de los servicios que ofrecemos.</li>
                <li>Cumplimiento de requisitos legales y reglamentarios: Nos comprometemos a cumplir con todas las leyes, regulaciones y requisitos legales aplicables a nuestra industria. Mantenemos un estricto cumplimiento de las normativas y estamos al tanto de los cambios y actualizaciones en la legislación turística para garantizar que nuestras operaciones sean legales y éticas.</li>
                <li>Formación y desarrollo del personal: Valoramos a nuestro equipo como un activo fundamental en la calidad de nuestros servicios. Brindamos capacitación y desarrollo continuo a nuestro personal, asegurando que estén equipados con las habilidades y conocimientos necesarios para brindar un servicio excepcional y cumplir con nuestros estándares de calidad.</li>
                <li>Medición y seguimiento de la satisfacción del cliente: Realizamos un seguimiento regular de la satisfacción del cliente a través de encuestas, retroalimentación y revisiones periódicas. Utilizamos esta información para identificar áreas de mejora y tomar medidas correctivas, garantizando que la calidad de nuestros servicios se mantenga en constante evolución.</li>
            </ol>
            La política de calidad de TurismoPop es revisada y comunicada periódicamente a todo el personal, asegurando que sea entendida y aplicada en todos los niveles de la organización. Nos esforzamos por lograr la excelencia en cada aspecto de nuestro trabajo y nos comprometemos a cumplir con los más altos estándares de calidad en beneficio de nuestros clientes.
            </p>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/TurismoPOP/pages/components/footer.php"; ?>


