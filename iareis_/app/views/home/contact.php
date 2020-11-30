    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Quer falar com a gente?</h2>
                <h3 class="section-subheading text-muted">Nos envie uma mensagem que responderemos logo...</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Seu nome *"
                                required="required" data-validation-required-message="Por favor, insira o seu nome." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Seu e-mail *"
                                required="required"
                                data-validation-required-message="Por favor, insira o seu e-mail." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Seu número de telefone *"
                                required="required"
                                data-validation-required-message="Por favor, insira seu número de telefone." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Sua mensagem *" required="required"
                                data-validation-required-message="Por favor insira uma mensagem."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton"
                        type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>