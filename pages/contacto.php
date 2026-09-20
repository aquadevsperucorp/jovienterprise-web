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

$page_title = 'Contact – JOVI Enterprise';
$page_desc  = 'Ask us about our Golden Berry, Grape and Grape & Golden Berry products. Sign up to be notified at launch.';
$extra_css  = 'contacto.css';

// Initialise variables (prevents warnings)
$nombre = $email = $telefono = $producto = $mensaje = '';
$form_sent  = false;
$form_error = '';

/* ==========================================================
   IF COMING FROM REDIRECT (GET) → SHOW SUCCESS MESSAGE
========================================================== */
if (isset($_GET['sent']) && $_GET['sent'] === '1') {
    $form_sent = true;

    // Retrieve name saved in session
    $nombre = $_SESSION['contact_nombre'] ?? '';

    // Optional: clear so it doesn't persist indefinitely
    unset($_SESSION['contact_nombre']);
}

/* ==========================================================
   PROCESS FORM (POST)
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

          // Gmail SMTP configuration
          $mail->isSMTP();
          $mail->SMTPAuth   = true;
          $mail->CharSet    = 'UTF-8';
          $mail->Host       = $ENV['SMTP_HOST'] ?? 'smtp.gmail.com';
          $mail->Username   = $ENV['SMTP_USER'] ?? '';
          $mail->Password   = $ENV['SMTP_PASS'] ?? '';
          $mail->Port       = (int)($ENV['SMTP_PORT'] ?? 465);
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

          // Sender and recipient
          $mail->setFrom($ENV['MAIL_FROM'], $ENV['MAIL_FROM_NAME']);
          $mail->addAddress($ENV['MAIL_TO']);
          $mail->addReplyTo($email, $nombre);

          // Email content
          $mail->isHTML(true);
          $mail->Subject = "New sales enquiry via JOVI ENTERPRISE website";
          $mail->Body    = "<h2>New contact message</h2>
              <p><strong>Name:</strong> {$nombre}</p>
              <p><strong>Email:</strong> {$email}</p>
              <p><strong>Phone:</strong> {$telefono}</p>
              <p><strong>Product:</strong> {$producto}</p>
              <hr>
              <p><strong>Message:</strong></p>
              <p>{$mensaje}</p>
          ";

          $mail->send();

          // Save name in session to display after redirect
          $_SESSION['contact_nombre'] = $nombre;

          // PRG → prevents re-submission on page refresh
          header("Location: " . $_SERVER['PHP_SELF'] . "?sent=1");
          exit;

      } catch (Exception $e) {
          $form_error = "Error sending message: " . $mail->ErrorInfo;
      }
    } else {
        $form_error = 'Please fill in all required fields.';
    }
}

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Contact">
  <div class="page-hero__bg" style="background-image:url('../assets/images/aguaymanto_2.jpg')"></div>
  <div class="page-hero__overlay"></div>
  <div class="container">
    <span class="section-tag" data-aos="fade-up">Get in Touch</span>
    <h1 data-aos="fade-up" data-aos-delay="80">Have any <span>questions?</span></h1>
    <p data-aos="fade-up" data-aos-delay="140">Ask us about ingredients, dosage, or the upcoming launch. We get back to you quickly.</p>
  </div>
</section>

<!-- ══════════════════════ CONTACT ══════════════════════════════════════ -->
<section class="contact-section section">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact information -->
      <div class="contact-info" data-aos="fade-right">
        <div>
          <h2>Ready to be<br>among the first?</h2>
          <p>Our products are launching soon. Send us a message and we'll notify you as soon as they're available.</p>
        </div>

        <div class="cinfo-item">
          <div class="cinfo-item__icon">📍</div>
          <div>
            <span class="cinfo-item__title">Location</span>
            <span class="cinfo-item__val">Ica, Peru</span>
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
            <span class="cinfo-item__title">Launch</span>
            <span class="cinfo-item__val">Coming soon — don't miss it!</span>
          </div>
        </div>

        <!-- Quick products -->
        <div class="contact-products">
          <span class="contact-products__title">Products coming soon</span>
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

      <!-- Form -->
      <div data-aos="fade-left">
        <div class="contact-form-box">

          <?php if ($form_sent) : ?>
          <!-- ── SUCCESS ── -->
          <div class="form-success">
            <span class="form-success__icon">🌿</span>
            <h3>Message received!</h3>
            <p>Thank you <?= htmlspecialchars($nombre) ?: 'for reaching out' ?>. We'll be in touch soon with information about our products.</p>
            <a href="contacto.php" class="btn btn--outline btn--lg" style="margin-top:20px">Send another message</a>
          </div>

          <?php else : ?>
          <!-- ── FORM ── -->
          <h3>Send us a message</h3>
          <p>We'll get back to you as soon as possible. Fields marked with * are required.</p>

          <?php if ($form_error) : ?>
          <div class="form-error-msg" role="alert">⚠️ <?= $form_error ?></div>
          <?php endif; ?>

          <form method="POST" id="contactForm" novalidate>
            <div class="form-grid">
              <div class="form-group">
                <label class="form-label" for="nombre">Name *</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                  placeholder="Your full name" required autocomplete="name"
                  value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control"
                  placeholder="you@email.com" required autocomplete="email"
                  value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
              </div>
            </div>

            <div class="form-grid">
              <div class="form-group">
                <label class="form-label" for="telefono">Phone / WhatsApp</label>
                <input type="tel" id="telefono" name="telefono" class="form-control"
                  placeholder="+51 908 653 582" autocomplete="tel"
                  value="<?= htmlspecialchars($_POST['telefono'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label class="form-label" for="producto">Product of interest</label>
                <select id="producto" name="producto" class="form-control">
                  <option value="">Select…</option>
                  <?php
                  $options = ['Golden Berry (500 mg)', 'Grape (500 mg)', 'Grape & Golden Berry (500 mg)', 'All products'];
                  foreach ($options as $opt) :
                    $sel = (($_POST['producto'] ?? '') === $opt) ? 'selected' : '';
                  ?>
                  <option <?= $sel ?>><?= htmlspecialchars($opt) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="mensaje">Message *</label>
              <textarea id="mensaje" name="mensaje" class="form-control"
                placeholder="Tell us your question, or ask us to notify you when products become available…"
                required><?= htmlspecialchars($_POST['mensaje'] ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn--primary btn--lg btn--full">
              <span>Send Message</span>
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