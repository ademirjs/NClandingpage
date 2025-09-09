<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PXLBCXG2');</script>
    <!-- End Google Tag Manager -->


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
            name="description"
            content="Descubra se você está pagando por serviços bancários que nunca contratou. Saiba como evitar cobranças indevidas e recuperar seu dinheiro."
    />
    <meta name="author" content="NãoContratei!" />
    <meta property="og:title" content="NãoContratei! - Evite Cobranças Bancárias Indevidas" />
    <meta property="og:description" content="Descubra se você está pagando por serviços bancários que nunca contratou." />
    <meta property="og:image" content="./assets/share-image.jpg" />
    <meta property="og:url" content="http://lp1.naocontratei.com.br/" />
    <meta name="twitter:card" content="summary_large_image" />
    <title>NãoContratei! - Evite Cobranças Bancárias Indevidas</title>
    <link rel="stylesheet" href="assets/styles.css" />

    <!-- Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap"
            rel="stylesheet"
    />
    <link
            href="https://fonts.googleapis.com/css?family=Inter&display=swap"
            rel="stylesheet"
    />
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXLBCXG2"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <nav class="navbar">
        <a href="http://lp1.naocontratei.com.br/" aria-label="Voltar à página inicial">
            <img src="./assets/logo.svg" alt="Logo da NãoContratei!" />
        </a>

        <a
                href=""
                target="_blank"
                rel="noopener noreferrer"
                class="navbar__contact-link"
        >
            <img src="./assets/icon-chat.svg" alt="Ícone de mensagem para contato" />
            <span>Fale Conosco</span>
        </a>
    </nav>
</header>

<main>
    <section id="headline" class="hero">
        <div class="hero__content">
            <div class="content-text">
                <h1>Cobranças Bancárias</h1>
                <h2>Você está pagando por serviços bancários que nunca contratou?</h2>
                <p>
                    Descubra agora se você também está entre os 30% dos brasileiros
                    vítimas de <strong>cobranças indevidas</strong>.
                </p>
                <form action="https://naocontratei.test/lead/lp/create" method="post" class="lead-form" x-data="{
                    nome: '',
                    email: '',
                    telefone: '',
                    nomeError: false,
                    emailError: false,
                    telefoneError: false,
                    validateName() {
                        this.nomeError = this.nome.trim().length < 3;
                        return !this.nomeError;
                    },
                    validateEmail() {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        this.emailError = !emailRegex.test(this.email);
                        return !this.emailError;
                    },
                    validatePhone() {
                        // Remove todos os caracteres não numéricos
                        const numeros = this.telefone.replace(/\D/g, '');
                        // Verifica se tem exatamente 11 dígitos (DDD + número)
                        this.telefoneError = numeros.length !== 11;
                        return !this.telefoneError;
                    },
                    submitForm(e) {
                        const nameValid = this.validateName();
                        const emailValid = this.validateEmail();
                        const phoneValid = this.validatePhone();

                        if (!nameValid || !emailValid || !phoneValid) {
                            e.preventDefault();
                        }
                    }
                }">
                    <div class="lead-form__input-container" :class="{'error': nomeError}">
                        <img src="./assets/icon-user.svg" alt="Icone de usuario" />
                        <input
                                type="text"
                                name="nome"
                                required
                                x-model="nome"
                                @input="nomeError = false"
                                placeholder="Digite seu nome"
                                class="lead-form__input"
                        />
                        <template x-if="nomeError">
                            <span class="input-error">Mínimo de 3 caracteres</span>
                        </template>
                    </div>


                    <div class="lead-form__input-container" :class="{'error': emailError}">
                        <img src="./assets/icon-email.svg" alt="Icone do email" />
                        <input
                                type="email"
                                name="email"
                                required
                                x-model="email"
                                @input="emailError = false"
                                placeholder="Digite seu melhor e-mail"
                                class="lead-form__input"
                        />
                        <template x-if="emailError">
                            <span class="input-error">E-mail inválido</span>
                        </template>
                    </div>

                    <div class="lead-form__input-container" :class="{'error': telefoneError}">
                        <img src="./assets/icon-what.svg" alt="Icone do WhatsApp" />
                        <input
                                type="tel"
                                name="telefone"
                                x-mask="(99) 99999-9999"
                                x-model="telefone"
                                required
                                @input="telefoneError = false"
                                placeholder="Digite seu número de WhatsApp"
                                class="lead-form__input"
                        />
                        <template x-if="telefoneError">
                            <span class="input-error">Telefone inválido</span>
                        </template>
                    </div>

                    <input type="hidden" name="origin" value="LP1_BANCARIO" />
                    <input type="hidden" name="formulario_id" value="01991754-6600-719b-8bd6-38435e8857c7" />

                    <button type="submit" class="bnt bnt-primary-form" @click="submitForm($event)">
                        <span>Quero uma análise agora</span>
                        <img
                                src="./assets/icon-arrow.svg"
                                alt="Seta apontando para a direita"
                        />
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section id="steps">
        <div class="container steps-container">
            <h2>Como Funciona?</h2>
            <div class="list-steps">
                <div class="step">
                    <img src="./assets/icon-formulario.svg" alt="Ícone de formulário">
                    <p>Você preenche o formulário com seus dados básicos</p>
                </div>
                <div class="step">
                    <img src="./assets/icon-analise.svg" alt="Ícone de análise">
                    <p>Nossa equipe faz uma análise gratuita do seu histórico bancário</p>
                </div>
                <div class="step">
                    <img src="./assets/icon-decisao.svg" alt="Ícone de decisão">
                    <p>Se for constatada cobrança indevida, você decide se quer seguir com o processo</p>
                </div>
                <div class="step">
                    <img src="./assets/icon-pagamento.svg" alt="Ícone de pagamento">
                    <p><span>Só paga se receber</span> — sem riscos pra você</p>
                </div>
            </div>
            <a href="#headline" class="bnt btn-primary">Quero uma análise agora</a>
        </div>
    </section>

    <section class="tools">
        <div class="tools_container">
            <h2 class="tools__title">Veja como podemos ajudar você a recuperar o que é seu!</h2>
            <div class="tools__grid">
                <a href="" class="card-service">
                    <div class="card-icon">
                        <img src="./assets/icon-money-orange.svg" alt="Ícone de Banco" />
                    </div>
                    <div class="card-text">
                        <h3>Cobrança Bancária</h3>
                        <p>Verifique se há cobranças indevidas em sua conta telefônica.</p>
                    </div>
                </a>

                <a href="" class="card-service">
                    <div class="card-icon">
                        <img src="./assets/icon-phone.svg" alt="Ícone de Telefone" />
                    </div>
                    <div class="card-text">
                        <h3>Cobrança Telefônica</h3>
                        <p>Verifique se há cobranças indevidas em sua conta telefônica.</p>
                    </div>
                </a>

                <a href="" class="card-service">
                    <div class="card-icon">
                        <img src="./assets/icon-tv.svg" alt="Ícone de TV" />

                        <span>Em breve</span>
                    </div>
                    <div class="card-text">
                        <h3>Cobrança de TV</h3>
                        <p>Verifique se há cobranças indevidas em sua conta telefônica.</p>
                    </div>
                </a>

                <a href="" class="card-service">
                    <div class="card-icon">
                        <img src="./assets/icon-water.svg" alt="Ícone de gota de água" />

                        <span>Em breve</span>
                    </div>
                    <div class="card-text">
                        <h3>Cobrança de Água</h3>
                        <p>Verifique se há cobranças indevidas em sua conta telefônica.</p>
                    </div>
                </a>
                <a href="" class="card-service">
                    <div class="card-icon">
                        <img src="./assets/icon-internet.svg" alt="Ícone de Internet" />

                        <span>Em breve</span>
                    </div>
                    <div class="card-text">
                        <h3>Cobrança de Internet</h3>
                        <p>Verifique se há cobranças indevidas em sua conta telefônica.</p>
                    </div>
                </a>
                <a href="" class="card-outros">
                    <h3>Não contratei, mais paguei?</h3>
                    <p>Recupere seu dinheiro de cobranças indevidas com especialistas!</p>
                    <button type="submit" class="bnt-primary">
                        <span>Solicitar Análise Gratuita</span>
                        <img
                                src="./assets/icon-arrow.svg"
                                alt="Seta apontando para a direita"
                        />
                    </button>
                </a>
            </div>
        </div>
    </section>
</main>


<footer>
    <section>
        <p>© 2025 NãoContratei – Todos os direitos reservados.</p>
        <div class="footer__social-media">
            <a href="https://www.instagram.com/nao.contratei/" aria-label="Instagram">
                <img src="./assets/icon-instagram.svg" alt="Ícone do Instagram" />
            </a>
            <a href="https://www.instagram.com/nao.contratei/" aria-label="Facebook">
                <img src="./assets/icon-facebook.svg" alt="Ícone do Facebook" />
            </a>
            <a href="https://www.instagram.com/nao.contratei/" aria-label="LinkedIn">
                <img src="./assets/icon-linkedlin.svg" alt="Ícone do LinkedIn" />
            </a>
        </div>
        <a href="http://lp1.naocontratei.com.br/" aria-label="Voltar à página inicial">
            <img src="./assets/min-logo.svg" alt="Logo da NãoContratei!" />
        </a>
    </section>
</footer>

<!-- Alpine Plugins -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>

<!-- Alpine Core -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>