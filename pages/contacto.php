<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../includes/env.php';
require __DIR__ . '/../libs/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../libs/PHPMailer/src/SMTP.php';
require __DIR__ . '/../libs/PHPMailer/src/Exception.php';

$ENV = loadEnv(dirname(__DIR__) . '/../.env');
//$ENV = loadEnv(__DIR__ . '/../.env');

$page_title = 'Contacto – JOVI Enterprise';
$page_desc  = 'Consulta sobre nuestros productos Golden Berry, Grape y Grape & Golden Berry. Notifícate para el lanzamiento.';
$extra_css  = 'contacto.css';

// Inicializar variables SIEMPRE (evita warnings)
$nombre = $email = $telefono = $producto = $mensaje = '';
$form_sent  = false;
$form_error = '';

/* ==========================================================
   SI VIENE DEL REDIRECT (GET) → MOSTRAR MENSAJE DE ÉXITO
========================================================== */
if (isset($_GET['sent']) && $_GET['sent'] === '1') {
    $form_sent = true;

    // Recuperar nombre guardado en sesión
    $nombre = $_SESSION['contact_nombre'] ?? '';

    // Opcional: borrar para que no quede guardado indefinidamente
    unset($_SESSION['contact_nombre']);
}

/* ==========================================================
   PROCESAR FORMULARIO (POST)
========================================================== */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre   = htmlspecialchars(trim($_POST['nombre']   ?? ''));
    $email    = htmlspecialchars(trim($_POST['email']    ?? ''));
    $telefono = htmlspecialchars(trim($_POST['telefono'] ?? ''));
    $producto = htmlspecialchars(trim($_POST['producto'] ?? ''));
    $mensaje  = htmlspecialchars(trim($_POST['mensaje']  ?? ''));

    if ($nombre && $email && $mensaje) {
      try {
          $mail = new PHPMailer(true);

          // Configuración SMTP Gmail
          $mail->isSMTP();
          $mail->SMTPAuth   = true; 
          $mail->CharSet    = 'UTF-8';
          $mail->Host       = $ENV['SMTP_HOST'] ?? 'smtp.gmail.com';
          $mail->Username   = $ENV['SMTP_USER'] ?? '';
          $mail->Password   = $ENV['SMTP_PASS'] ?? '';
          $mail->Port       = (int)($ENV['SMTP_PORT'] ?? 465);
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

          // Remitente y destinatario
          $mail->setFrom($ENV['MAIL_FROM'], $ENV['MAIL_FROM_NAME']);
          $mail->addAddress($ENV['MAIL_TO']);
          $mail->addReplyTo($email, $nombre);

          // Contenido del email
          $mail->isHTML(true);
          $mail->Subject = "Nueva solicitud de venta en JOVI ENTERPRISE WEB";
          $mail->Body    = "<h2>Nuevo mensaje de contacto</h2>
              <p><strong>Nombre:</strong> {$nombre}</p>
              <p><strong>Email:</strong> {$email}</p>
              <p><strong>Teléfono:</strong> {$telefono}</p>
              <p><strong>Producto:</strong> {$producto}</p>
              <hr>
              <p><strong>Mensaje:</strong></p>
              <p>{$mensaje}</p>
          ";

          $mail->send();

          // Guardar nombre en sesión para mostrarlo después del redirect
          $_SESSION['contact_nombre'] = $nombre;

          // PRG → evitar reenvío con F5
          header("Location: " . $_SERVER['PHP_SELF'] . "?sent=1");
          exit;

      } catch (Exception $e) {
          $form_error = "Error al enviar: " . $mail->ErrorInfo;
      }
    } else {
        $form_error = 'Por favor completa todos los campos requeridos.';
    }
}

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Contacto">
  <div class="page-hero__bg" style="background-image:url('../assets/images/aguaymanto_2.jpg')"></div>
  <div class="page-hero__overlay"></div>
  <div class="container">
    <span class="section-tag" data-aos="fade-up">Hablemos</span>
    <h1 data-aos="fade-up" data-aos-delay="80">¿Tienes <span>preguntas?</span></h1>
    <p data-aos="fade-up" data-aos-delay="140">Consulta sobre ingredientes, dosificación o el próximo lanzamiento. Respondemos rápido.</p>
  </div>
</section>

<!-- ══════════════════════ CONTACTO ════════════════════════════════════ -->
<section class="contact-section section">
  <div class="container">
    <div class="contact-grid">

      <!-- Información de contacto -->
      <div class="contact-info" data-aos="fade-right">
        <div>
          <h2>¿Listo para ser<br>de los primeros?</h2>
          <p>Nuestros productos se lanzan próximamente. Escríbenos y te notificamos en cuanto estén disponibles.</p>
        </div>

        <div class="cinfo-item">
          <div class="cinfo-item__icon">📍</div>
          <div>
            <span class="cinfo-item__title">Ubicación</span>
            <span class="cinfo-item__val">Ica, Perú</span>
          </div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-item__icon">📧</div>
          <div>
            <span class="cinfo-item__title">Email</span>
            <span class="cinfo-item__val">jovienterprise26@gmail.com</span>
          </div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-item__icon">💬</div>
          <div>
            <span class="cinfo-item__title">WhatsApp</span>
            <span class="cinfo-item__val">+51 908 653 582</span>
          </div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-item__icon">🚀</div>
          <div>
            <span class="cinfo-item__title">Lanzamiento</span>
            <span class="cinfo-item__val">Próximamente — ¡no te lo pierdas!</span>
          </div>
        </div>

        <!-- Productos rápidos -->
        <div class="contact-products">
          <span class="contact-products__title">Productos disponibles pronto</span>
          <div class="contact-products__list">
            <div class="contact-product-item contact-product-item--golden">
              <div class="contact-product-item__img">
                <img src="../assets/images/aguaymanto_3.jpg" alt="Golden Berry">
              </div>
              <span class="contact-product-item__name">Golden Berry</span>
              <span class="contact-product-item__mg">500 mg</span>
            </div>
            <div class="contact-product-item contact-product-item--grape">
              <div class="contact-product-item__img">
                <img src="../assets/images/uva_2.jpg" alt="Grape">
              </div>
              <span class="contact-product-item__name">Grape</span>
              <span class="contact-product-item__mg">500 mg</span>
            </div>
            <div class="contact-product-item contact-product-item--combo">
              <div class="contact-product-item__img contact-product-item__img--combo">
                <img src="../assets/images/uva_2.jpg" alt="">
                <img src="../assets/images/aguaymanto_1.jpg" alt="">
              </div>
              <span class="contact-product-item__name">Grape &amp; G.Berry</span>
              <span class="contact-product-item__mg">500 mg</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulario -->
      <div data-aos="fade-left">
        <div class="contact-form-box">

          <?php if ($form_sent) : ?>
          <!-- ── SUCCESS ── -->
          <div class="form-success">
            <span class="form-success__icon">🌿</span>
            <h3>¡Mensaje recibido!</h3>
            <p>Gracias <?= htmlspecialchars($nombre) ?: 'por escribirnos' ?>. Te contactaremos pronto con información sobre nuestros productos.</p>
            <a href="contacto.php" class="btn btn--outline btn--lg" style="margin-top:20px">Enviar otro mensaje</a>
          </div>

          <?php else : ?>
          <!-- ── FORM ── -->
          <h3>Envíanos un mensaje</h3>
          <p>Te respondemos lo antes posible. Los campos con * son obligatorios.</p>

          <?php if ($form_error) : ?>
          <div class="form-error-msg" role="alert">⚠️ <?= $form_error ?></div>
          <?php endif; ?>

          <form method="POST" id="contactForm" novalidate>
            <div class="form-grid">
              <div class="form-group">
                <label class="form-label" for="nombre">Nombre *</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                  placeholder="Tu nombre completo" required autocomplete="name"
                  value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control"
                  placeholder="tu@email.com" required autocomplete="email"
                  value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
              </div>
            </div>

            <div class="form-grid">
              <div class="form-group">
                <label class="form-label" for="telefono">Teléfono / WhatsApp</label>
                <input type="tel" id="telefono" name="telefono" class="form-control"
                  placeholder="+51 908 653 582" autocomplete="tel"
                  value="<?= htmlspecialchars($_POST['telefono'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label class="form-label" for="producto">Producto de interés</label>
                <select id="producto" name="producto" class="form-control">
                  <option value="">Selecciona…</option>
                  <?php
                  $options = ['Golden Berry (500 mg)', 'Grape (500 mg)', 'Grape & Golden Berry (500 mg)', 'Todos los productos'];
                  foreach ($options as $opt) :
                    $sel = (($_POST['producto'] ?? '') === $opt) ? 'selected' : '';
                  ?>
                  <option <?= $sel ?>><?= htmlspecialchars($opt) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="mensaje">Mensaje *</label>
              <textarea id="mensaje" name="mensaje" class="form-control"
                placeholder="Cuéntanos tu consulta, o pídenos que te notifiquemos cuando los productos estén disponibles…"
                required><?= htmlspecialchars($_POST['mensaje'] ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn--primary btn--lg btn--full">
              <span>Enviar mensaje</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <line x1="22" y1="2" x2="11" y2="13"/>
                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
              </svg>
            </button>
          </form>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
