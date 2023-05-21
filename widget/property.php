<div class="main_property">
    <div class="main_property_header bg-light py-5">
        <div class="container">
            <h1 class="text-front">Linda Casa no Rio Tavares com vista para o Mar</h1>
            <p class="mb-0">Imóvel Residencial - Apartamento - Campecht</p>
        </div>
    </div>

    <div class="main_property_content py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <?php
                            $images = 6;
                            for ($i = 1; $i <= $images; $i++) {
                                ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>"></li>
                                <?php
                            }
                            ?>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="properties/1/a87d07d9-d477-4583-90c1-12dea16b7475.jpg" class="d-block w-100"
                                     alt="Espaço com churrasqueira, mesa e rede para descanso">
                            </div>
                            <div class="carousel-item">
                                <img src="properties/1/8608f813-65de-471c-9dcd-3a4ae17ba214.jpg" class="d-block w-100"
                                     alt="Sala com sofás e mesa">
                            </div>
                            <div class="carousel-item">
                                <img src="properties/1/5a3571ab-4d76-466f-8246-eff8cb98cedd.jpg" class="d-block w-100"
                                     alt="Copa cozinha com mesa e cadeiras">
                            </div>
                            <div class="carousel-item">
                                <img src="properties/1/6abf463b-67a0-4fee-847e-42537699ad8e.jpg" class="d-block w-100"
                                     alt="Quarto com duas camas de solteiro">
                            </div>
                            <div class="carousel-item">
                                <img src="properties/1/8f317473-e7b0-4c6e-8198-2ebe44a21f11.jpg" class="d-block w-100"
                                     alt="Banheiro com chuveiro, banheira e plantação">
                            </div>
                            <div class="carousel-item">
                                <img src="properties/1/b7f88e8d-17f7-4c06-bbdb-fabbf9ca554c.jpg" class="d-block w-100"
                                     alt="Aréa de lazer com piscina e jardim de platações">
                            </div>
                            <div class="carousel-item">
                                <img src="properties/1/f7762031-54b0-4fe8-8003-a4eeb9a07253.jpg" class="d-block w-100"
                                     alt="Corredor para a porta de lazer">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                                data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                                data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </button>
                    </div>

                    <div class="main_property_content_price text-muted pt-4">
                        <p class="main_property_content_price_small">IPTU: R$ 100,00</p>
                        <p class="main_property_content_price_big">Valor do Aluguel: R$ 2.300,00/mês</p>
                    </div>

                    <div class="main_property_content_description">
                        <h2 class="text-front">Conheça mais o imóvel</h2>
                        <p>Apresentamos um imóvel encantador e moderno, perfeito para aqueles que buscam conforto e
                            elegância. Esta residência impressionante possui um design arrojado e está localizada em um
                            bairro tranquilo e valorizado.</p>
                        <p>Ao adentrar o imóvel, você será recebido por uma espaçosa sala de estar com janelas amplas
                            que permitem a entrada de luz natural, criando um ambiente acolhedor e convidativo. A
                            decoração contemporânea e os acabamentos de alta qualidade conferem um toque de sofisticação
                            ao espaço.</p>
                        <p>A cozinha é um destaque à parte, equipada com eletrodomésticos modernos e amplo espaço de
                            armazenamento. É o local ideal para preparar deliciosas refeições e desfrutar de momentos
                            gastronômicos inesquecíveis com familiares e amigos.</p>
                        <p>Este imóvel possui três quartos espaçosos, incluindo uma suíte master elegante e confortável,
                            onde você poderá relaxar e recarregar as energias. Os banheiros são equipados com
                            acabamentos de alto padrão e oferecem um ambiente luxuoso para cuidar do seu bem-estar
                            diário.</p>
                        <p>Além disso, o imóvel conta com uma área externa encantadora, como um jardim bem cuidado e um
                            espaço para entretenimento ao ar livre, ideal para churrascos e momentos de lazer. Há também
                            uma garagem espaçosa, oferecendo comodidade para estacionar seus veículos com segurança.</p>
                        <p>Sua localização privilegiada permite fácil acesso a diversas comodidades, como escolas,
                            supermercados e áreas de lazer. A proximidade com parques e áreas verdes proporciona a
                            oportunidade de desfrutar da natureza e praticar atividades ao ar livre.</p>
                    </div>

                    <div class="main_property_content_features">
                        <h2 class="text-front">Características</h2>
                        <table class="table table-striped">
                            <tbody>
                            <?php
                            $caracteristicas = ["Dormitórios", "Suítes", "Banheiros", "Salas", "Garagem", "Garagem Coberta", "Área Total", "Área Útil"];
                            $valores = ["1", "1", "2", "1", "2", "2", "250 m²", "180 m²"];

                            foreach ($caracteristicas as $key => $caracteristica) {
                                ?>
                                <tr>
                                    <td><?= $caracteristica ?></td>
                                    <td><?= $valores[$key] ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="main_property_content_structure">
                        <h2 class="text-front">Estrutura </h2>
                        <div class="row">
                            <span class="main_property_content_structure_item icon-check">Churrasqueira</span>
                            <span class="main_property_content_structure_item icon-check">Biblioteca</span>
                            <span class="main_property_content_structure_item icon-check">Escritório</span>
                            <span class="main_property_content_structure_item icon-check">Ar Condicionado</span>
                        </div>
                    </div>

                    <div class="main_property_content_location">
                        <h2 class="text-front">Localização</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7068.604956208558!2d-48.477968903432085!3d-27.646111850919006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95273be59bd7dfe3%3A0xc0425b08554f4247!2sRio%20Tavares%2C%20Florian%C3%B3polis%20-%20SC!5e0!3m2!1spt-BR!2sbr!4v1684683106123!5m2!1spt-BR!2sbr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="#" class="btn btn-outline-success btn-lg d-block icon-whatsapp mb-3 mt-4 mt-lg-0">Converse com um
                        Corretor</a>
                    <div class="main_property_contact">
                        <h2 class="bg-front text-white">Entre em contato</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="nome">Seu nome:</label>
                                <input type="text" id="nome" class="form-control"
                                       placeholder="Informe seu nome completo">
                            </div>
                            <div class="form-group">
                                <label for="email">Seu email:</label>
                                <input type="email" id="email" class="form-control"
                                       placeholder="Informe seu nome completo">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Seu telefone:</label>
                                <input type="tel" id="telefone" class="form-control"
                                       placeholder="Informe seu nome completo">
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Sua mensagem:</label>
                                <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="5">Quero ter mais informações sobre esse Imovel. Imovel Residencial. Casa Campeche, Florianópolis! (#01)</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-front btn-block">Enviar</button>
                                <p class="text-center text-front font-weight-bold mt-4 mb-0">+55 (11) 98765-4321</p>
                            </div>
                        </form>
                    </div>
                    <div class="main_property_share mt-3 text-center">
                        <a href="#" class="btn btn-front icon-facebook icon-notext"></a>
                        <a href="#" class="btn btn-front icon-twitter icon-notext"></a>
                        <a href="#" class="btn btn-front icon-instagram icon-notext"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>