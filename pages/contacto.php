<?php
/**
 * JOVI Enterprise – Contacto
 *
 * Para activar envío de emails reales con PHPMailer:
 * 1. Descarga PHPMailer: https://github.com/PHPMailer/PHPMailer
 * 2. Coloca los archivos en: ../libs/PHPMailer/src/
 * 3. Descomenta las líneas de use/require abajo
 * 4. Reemplaza las credenciales de Gmail
 */

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require '../libs/PHPMailer/src/PHPMailer.php';
// require '../libs/PHPMailer/src/SMTP.php';
// require '../libs/PHPMailer/src/Exception.php';

$page_title = 'Contacto – JOVI Enterprise';
$page_desc  = 'Consulta sobre nuestros productos Golden Berry, Grape y Grape & Golden Berry. Notifícate para el lanzamiento.';
$extra_css  = 'contacto.css';

$form_sent  = false;
$form_error = '';

// ── Procesar formulario ──────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre   = htmlspecialchars(trim($_POST['nombre']   ?? ''));
    $email    = htmlspecialchars(trim($_POST['email']    ?? ''));
    $telefono = htmlspecialchars(trim($_POST['telefono'] ?? ''));
    $producto = htmlspecialchars(trim($_POST['producto'] ?? ''));
    $mensaje  = htmlspecialchars(trim($_POST['mensaje']  ?? ''));

    if (empty($nombre) || empty($email) || empty($mensaje)) {
        $form_error = 'Por favor completa los campos obligatorios: Nombre, Email y Mensaje.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'El email ingresado no tiene un formato válido.';
    } else {
        // ── ACTIVAR PHPMAILER ────────────────────────────────────────────
        // try {
        //     $mail = new PHPMailer(true);
        //     $mail->isSMTP();
        //     $mail->Host       = 'smtp.gmail.com';
        //     $mail->SMTPAuth   = true;
        //     $mail->Username   = 'tu@gmail.com';
        //     $mail->Password   = 'xxxx xxxx xxxx xxxx';
        //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //     $mail->Port       = 587;
        //     $mail->CharSet    = 'UTF-8';
        //     $mail->setFrom('tu@gmail.com', 'JOVI Enterprise Web');
        //     $mail->addAddress('tu@gmail.com');
        //     $mail->addReplyTo($email, $nombre);
        //     $mail->isHTML(true);
        //     $mail->Subject = "✉️ Consulta JOVI – $producto";
        //     $mail->Body    = "
        //         <h2 style='color:#2a7035'>Nueva consulta — jovienterp.com</h2>
        //         <p><b>Nombre:</b> $nombre</p>
        //         <p><b>Email:</b> $email</p>
        //         <p><b>Teléfono:</b> $telefono</p>
        //         <p><b>Producto de interés:</b> $producto</p>
        //         <hr>
        //         <p><b>Mensaje:</b></p><p>$mensaje</p>
        //     ";
        //     $mail->send();
        //     $form_sent = true;
        // } catch (Exception $e) {
        //     $form_error = 'Error al enviar el mensaje. Inténtalo de nuevo.';
        // }

        $form_sent = true; // ← Quitar cuando actives PHPMailer
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
            <span class="cinfo-item__val">contacto@jovienterp.com</span>
          </div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-item__icon">💬</div>
          <div>
            <span class="cinfo-item__title">WhatsApp</span>
            <span class="cinfo-item__val">+51 999 999 999</span>
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
            <p>Gracias <strong><?= htmlspecialchars($_POST['nombre'] ?? '') ?></strong>. Te contactaremos pronto con información sobre nuestros productos.</p>
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
                  placeholder="+51 999 999 999" autocomplete="tel"
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
