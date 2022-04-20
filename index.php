<html lang="pt-br">
<head>
       <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loja-de-Moveis</title>
    <!-- MDB-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #F6CFCF; height:10%;">
      <div class="container-fluid">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logofc.png" alt="" width="65" height="60" class="d-inline-block align-text-top">
      <b>
      <p style="color:white" > MACIEL MOVEIS</p> 
      </b>
    </a>
  </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cozinha.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/ecritorio.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/sala.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <br>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        <form id="form1" name="form1" method="post" action="cookie.php">
        <label>
          <select name="lugarSelect">
              <option value="todos">Todos</option>
              <option value="cozinha">Cozinha</option>
              <option value="escritorio">Escritório</option>
              <option value="sala">Sala de estar</option> 
          </select>
          <input type="submit" name="Submit" value="Aplicar" />
        </label>
    </form>
        </div>
      </div>
      <?php
      $todos = '<div class="row">
      <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.milanistore.com.br/produto/mesa-escrivaninha-retro-02-gavetas-sky-olmo-branco-artany-181309">
             <img src="img/mesa4.png"> 
            <div class="card-body">
              <h5 class="card-title">Mesa Escrivaninha Retro 02 Gavetas Sky Olmo Branco Artany (Preço-R$599,90)</h5>
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
               </a>
            </div>
            </div>
          </div>
        </div>
      <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://now.westwing.com.br/escrivaninha-villani-branco-36346.html">
             <img src="img/mesa3.png"> 
            <div class="card-body">
              <h5 class="card-title">Escrivaninha Villani - Branco (Preço-R$2.499,00)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
      <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.madeiramadeira.com.br/armario-de-cozinha-completa-valdemoveis-sena-7-portas-2-gavetas-ipe-off-white-2976622.html">
             <img src="img/armario5.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Armário de cozinha completa Valdemóveis Sena 7 portas 2 gavetas - Ipê/Off White (Preço-R$1.018,29)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.marabraz.com.br/cozinha-compacta-4-pecas-c-torre-quente-princesa-nesher-moveis-freijo-offwhite--01326938665.html?utm_term=Móveis&utm_source=google&utm_medium=flp&utm_source=google&utm_medium=cpc&utm_campaign=15990096887&gclid=EAIaIQobChMItITEo6yI9wIVz0FIAB3VvABQEAQYCSABEgL8ovD_BwE">
             <img src="img/armario2.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Cozinha Compacta 4 Peças C/ Torre Quente 100% Mdf Bariloche - Freijo / Off white (Preço-R$2.294,16)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.madeiramadeira.com.br/sofa-3-lugares-botone-beatle-daf-mobiliario-593002.html?origem=pla-593002&utm_source=google&utm_medium=cpc&utm_content=sofa-3-lugares-5144&utm_term=&utm_id=8840388917&gclid=EAIaIQobChMIgcqL5KWH9wIVAeWRCh1DIAfxEAQYESABEgL70vD_BwE"> 
             <img src="img/sofa3.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Sofá 3 Lugares Botonê Beatle Daf Mobiliário Verde Menta (Preço-R$ 1.760,93)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.madeiramadeira.com.br/sofa-living-istambul-em-suede-essencial-estofados-942693078.html?seller=2321&origem=pla-942693078&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=14823216613&gclid=EAIaIQobChMI3s6psKSH9wIVNnRvBB1VTwLCEAkYBSABEgIJ3_D_BwE">
             <img src="img/sofa2.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Sofá Living Istambul Em Suede Essencial Estofados (Preço-R$ 1.499,00)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
      <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.madeiramadeira.com.br/sofa-mimo-1-35-veludo-rosa-b-castanho-3453034.html?seller=7232&origem=pla-3453034&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIuozP-qeH9wIVC0FIAB3znAe-EAQYBiABEgLnhvD_BwE">
             <img src="img/sofa1.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Sofá Mimo Veludo Rosa B. Castanho (Preço-R$ 1.211,24)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.marabraz.com.br/cozinha-compacta-suspensa-c-balc-o-thais-poquema-capuccino-off-white--00879664196.html">
             <img src="img/armario1.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Cozinha Compacta Suspensa c/ Balcão Thais-Poquema - Capuccino / Off white (Preço-R$318,90) </h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.madeiramadeira.com.br/cozinha-compacta-7-pecas-emily-henn-626255.html?origem=pla-626255&utm_source=google&utm_medium=cpc&utm_content=cozinha-compacta&utm_term=&utm_id=16024551058&gclid=EAIaIQobChMI7Ji9i-OM9wIVDWGRCh32rw6mEAQYASABEgIKw_D_BwE">
             <img src="img/armario3.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Cozinha Compacta 7 Peças Emily Henn Branco (Preço-R$2.659,90)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.shopjm.com.br/armario-de-cozinha-grande-ipe-grafite-maranella-valdemoveis.html">
             <img src="img/armario4.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Armário De Cozinha Grande Ipê Grafite Maranella Valdemóveis (Preço-R$1.359,90)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.madeiramadeira.com.br/sofa-herval-urban-3-lugares-linho-chumbo-2950967.html?seller=3853&origem=pla-2950967&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIvYOG8paI9wIVPUFIAB2orgGDEAQYJSABEgJRpfD_BwE">
             <img src="img/sofaa5.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Sofá Herval Urban, 3 Lugares, Linho Chumbo (Preço-R$1.924,93)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.americanas.com.br/produto/4398637078?epar=bp_pl_00_go_mv_pmax_quarto_colchao&opn=YSMESP&WT.srch=1&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAsYBSABEgKhBfD_BwE">
             <img src="img/mesa1.png"> 
            <div class="card-body">
              <h5 class="card-title">Mesa de Escritório Office Estilo Industrial Inspire 120 cm larg Branco com cobre (Preço-R$339,15)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://www.industrialmoveis.com.br/mesa-de-escritorio-industrial-com-1-prateleira-120x50cm-pinus-18mm?gclid=EAIaIQobChMI9eCQ5bGI9wIVATKRCh3DLQqjEAsYAiABEgLJ6PD_BwE">
             <img src="img/mesa2.png"> 
            <div class="card-body">
              <h5 class="card-title">MESA DE ESCRITÓRIO INDUSTRIAL COM 1 PRATELEIRA 120X50CM PINUS 18MM (Preço-R$577,92)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://now.westwing.com.br/sofa-de-algodao-elis-caramelo-e-bege-6759.html?simple=DEQ20VER89648-9274&gclid=EAIaIQobChMIypvugaWI9wIVDfaRCh3IowolEAsYCyABEgLQyPD_BwE">
             <img src="img/sofaaa4.jpg"> 
            <div class="card-body">
              <h5 class="card-title">Sofá 5 Lugares Ipê Espresso Móveis Bege (Preço-R$9.489,00)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
        <div class="card">  
            <div class="zoom">
            <a href="https://produto.mercadolivre.com.br/MLB-2182498974-mesa-office-prism-patrimar-moveis-_JM?matt_tool=61275631&matt_word=&matt_source=google&matt_campaign_id=14302215501&matt_ad_group_id=134553696708&matt_match_type=&matt_network=g&matt_device=c&matt_creative=539425477561&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=216859977&matt_product_id=MLB2182498974&matt_product_partition_id=1469246871117&matt_target_id=pla-1469246871117&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAQYCCABEgIzN_D_BwE">
             <img src="img/mesa5.png"> 
            <div class="card-body">
              <h5 class="card-title">Mesa Office Prism Patrimar Moveis (Preço-R$379)</h5>
              <button class="btn btn-primary" type="button">comprar</button>
               </a>
            </div>
            </div>
          </div>
    </div>';
      if (isset($_COOKIE['lugarCookie'])){
        $lugar = $_COOKIE['lugarCookie'];
        if ($lugar == 'cozinha') {
          echo('<div class="row">
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.marabraz.com.br/cozinha-compacta-suspensa-c-balc-o-thais-poquema-capuccino-off-white--00879664196.html">
               <img src="img/armario1.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta Suspensa c/ Balcão Thais-Poquema - Capuccino / Off white</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.marabraz.com.br/cozinha-compacta-4-pecas-c-torre-quente-princesa-nesher-moveis-freijo-offwhite--01326938665.html?utm_term=Móveis&utm_source=google&utm_medium=flp&utm_source=google&utm_medium=cpc&utm_campaign=15990096887&gclid=EAIaIQobChMItITEo6yI9wIVz0FIAB3VvABQEAQYCSABEgL8ovD_BwE">
               <img src="img/armario2.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta 4 Peças C/ Torre Quente 100% Mdf Bariloche - Freijo / Off white</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.madeiramadeira.com.br/cozinha-compacta-7-pecas-emily-henn-626255.html?origem=pla-626255&utm_source=google&utm_medium=cpc&utm_content=cozinha-compacta&utm_term=&utm_id=16024551058&gclid=EAIaIQobChMI7Ji9i-OM9wIVDWGRCh32rw6mEAQYASABEgIKw_D_BwE">
               <img src="img/armario3.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta 7 Peças Emily Henn Branco</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.shopjm.com.br/armario-de-cozinha-grande-ipe-grafite-maranella-valdemoveis.html">
               <img src="img/armario4.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Armário De Cozinha Grande Ipê Grafite Maranella Valdemóveis</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.madeiramadeira.com.br/armario-de-cozinha-completa-valdemoveis-sena-7-portas-2-gavetas-ipe-off-white-2976622.html">
               <img src="img/armario5.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Armário de cozinha completa Valdemóveis Sena 7 portas 2 gavetas - Ipê/Off White</h5> <div class="d-grid gap-2 d-md-block">
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.americanas.com.br/produto/4398637078?epar=bp_pl_00_go_mv_pmax_quarto_colchao&opn=YSMESP&WT.srch=1&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAsYBSABEgKhBfD_BwE">
               <img src="img/mesa1.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa de Escritório Office Estilo Industrial Inspire 120 cm larg Branco com cobre.</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.industrialmoveis.com.br/mesa-de-escritorio-industrial-com-1-prateleira-120x50cm-pinus-18mm?gclid=EAIaIQobChMI9eCQ5bGI9wIVATKRCh3DLQqjEAsYAiABEgLJ6PD_BwE">
               <img src="img/mesa2.png"> 
              <div class="card-body">
                <h5 class="card-title">MESA DE ESCRITÓRIO INDUSTRIAL COM 1 PRATELEIRA 120X50CM PINUS 18MM</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://now.westwing.com.br/escrivaninha-villani-branco-36346.html">
               <img src="img/mesa3.png"> 
              <div class="card-body">
                <h5 class="card-title">Escrivaninha Villani - Branco</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.milanistore.com.br/produto/mesa-escrivaninha-retro-02-gavetas-sky-olmo-branco-artany-181309">
               <img src="img/mesa4.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa Escrivaninha Retro 02 Gavetas Sky Olmo Branco Artany</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://produto.mercadolivre.com.br/MLB-2182498974-mesa-office-prism-patrimar-moveis-_JM?matt_tool=61275631&matt_word=&matt_source=google&matt_campaign_id=14302215501&matt_ad_group_id=134553696708&matt_match_type=&matt_network=g&matt_device=c&matt_creative=539425477561&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=216859977&matt_product_id=MLB2182498974&matt_product_partition_id=1469246871117&matt_target_id=pla-1469246871117&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAQYCCABEgIzN_D_BwE">
               <img src="img/mesa5.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa Office Prism Patrimar Moveis</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
      </div>
    </div>
    <div class="row">
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-mimo-1-35-veludo-rosa-b-castanho-3453034.html?seller=7232&origem=pla-3453034&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIuozP-qeH9wIVC0FIAB3znAe-EAQYBiABEgLnhvD_BwE">
         <img src="img/sofa1.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Mimo Veludo Rosa B. Castanho</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-living-istambul-em-suede-essencial-estofados-942693078.html?seller=2321&origem=pla-942693078&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=14823216613&gclid=EAIaIQobChMI3s6psKSH9wIVNnRvBB1VTwLCEAkYBSABEgIJ3_D_BwE">
         <img src="img/sofa2.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Living Istambul Em Suede Essencial Estofados</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-3-lugares-botone-beatle-daf-mobiliario-593002.html?origem=pla-593002&utm_source=google&utm_medium=cpc&utm_content=sofa-3-lugares-5144&utm_term=&utm_id=8840388917&gclid=EAIaIQobChMIgcqL5KWH9wIVAeWRCh1DIAfxEAQYESABEgL70vD_BwE"> 
         <img src="img/sofa3.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá 3 Lugares Botonê Beatle Daf Mobiliário Verde Menta</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://now.westwing.com.br/sofa-de-algodao-elis-caramelo-e-bege-6759.html?simple=DEQ20VER89648-9274&gclid=EAIaIQobChMIypvugaWI9wIVDfaRCh3IowolEAsYCyABEgLQyPD_BwE">
         <img src="img/sofaaa4.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá 5 Lugares Ipê Espresso Móveis Bege</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-herval-urban-3-lugares-linho-chumbo-2950967.html?seller=3853&origem=pla-2950967&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIvYOG8paI9wIVPUFIAB2orgGDEAQYJSABEgJRpfD_BwE">
         <img src="img/sofaa5.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Herval Urban, 3 Lugares, Linho Chumbo</h5> <div class="d-grid gap-2 d-md-block">
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
  </div>');
        }elseif($lugar == 'escritorio'){
          echo('<div class="row">
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.americanas.com.br/produto/4398637078?epar=bp_pl_00_go_mv_pmax_quarto_colchao&opn=YSMESP&WT.srch=1&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAsYBSABEgKhBfD_BwE">
               <img src="img/mesa1.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa de Escritório Office Estilo Industrial Inspire 120 cm larg Branco com cobre.</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.industrialmoveis.com.br/mesa-de-escritorio-industrial-com-1-prateleira-120x50cm-pinus-18mm?gclid=EAIaIQobChMI9eCQ5bGI9wIVATKRCh3DLQqjEAsYAiABEgLJ6PD_BwE">
               <img src="img/mesa2.png"> 
              <div class="card-body">
                <h5 class="card-title">MESA DE ESCRITÓRIO INDUSTRIAL COM 1 PRATELEIRA 120X50CM PINUS 18MM</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://now.westwing.com.br/escrivaninha-villani-branco-36346.html">
               <img src="img/mesa3.png"> 
              <div class="card-body">
                <h5 class="card-title">Escrivaninha Villani - Branco</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.milanistore.com.br/produto/mesa-escrivaninha-retro-02-gavetas-sky-olmo-branco-artany-181309">
               <img src="img/mesa4.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa Escrivaninha Retro 02 Gavetas Sky Olmo Branco Artany</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://produto.mercadolivre.com.br/MLB-2182498974-mesa-office-prism-patrimar-moveis-_JM?matt_tool=61275631&matt_word=&matt_source=google&matt_campaign_id=14302215501&matt_ad_group_id=134553696708&matt_match_type=&matt_network=g&matt_device=c&matt_creative=539425477561&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=216859977&matt_product_id=MLB2182498974&matt_product_partition_id=1469246871117&matt_target_id=pla-1469246871117&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAQYCCABEgIzN_D_BwE">
               <img src="img/mesa5.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa Office Prism Patrimar Moveis</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
      </div>
    </div>
    <div class="row">
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-mimo-1-35-veludo-rosa-b-castanho-3453034.html?seller=7232&origem=pla-3453034&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIuozP-qeH9wIVC0FIAB3znAe-EAQYBiABEgLnhvD_BwE">
         <img src="img/sofa1.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Mimo Veludo Rosa B. Castanho</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-living-istambul-em-suede-essencial-estofados-942693078.html?seller=2321&origem=pla-942693078&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=14823216613&gclid=EAIaIQobChMI3s6psKSH9wIVNnRvBB1VTwLCEAkYBSABEgIJ3_D_BwE">
         <img src="img/sofa2.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Living Istambul Em Suede Essencial Estofados</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-3-lugares-botone-beatle-daf-mobiliario-593002.html?origem=pla-593002&utm_source=google&utm_medium=cpc&utm_content=sofa-3-lugares-5144&utm_term=&utm_id=8840388917&gclid=EAIaIQobChMIgcqL5KWH9wIVAeWRCh1DIAfxEAQYESABEgL70vD_BwE"> 
         <img src="img/sofa3.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá 3 Lugares Botonê Beatle Daf Mobiliário Verde Menta</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://now.westwing.com.br/sofa-de-algodao-elis-caramelo-e-bege-6759.html?simple=DEQ20VER89648-9274&gclid=EAIaIQobChMIypvugaWI9wIVDfaRCh3IowolEAsYCyABEgLQyPD_BwE">
         <img src="img/sofaaa4.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá 5 Lugares Ipê Espresso Móveis Bege</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-herval-urban-3-lugares-linho-chumbo-2950967.html?seller=3853&origem=pla-2950967&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIvYOG8paI9wIVPUFIAB2orgGDEAQYJSABEgJRpfD_BwE">
         <img src="img/sofaa5.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Herval Urban, 3 Lugares, Linho Chumbo</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
  </div>
  <div class="row">
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.marabraz.com.br/cozinha-compacta-suspensa-c-balc-o-thais-poquema-capuccino-off-white--00879664196.html">
               <img src="img/armario1.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta Suspensa c/ Balcão Thais-Poquema - Capuccino / Off white</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.marabraz.com.br/cozinha-compacta-4-pecas-c-torre-quente-princesa-nesher-moveis-freijo-offwhite--01326938665.html?utm_term=Móveis&utm_source=google&utm_medium=flp&utm_source=google&utm_medium=cpc&utm_campaign=15990096887&gclid=EAIaIQobChMItITEo6yI9wIVz0FIAB3VvABQEAQYCSABEgL8ovD_BwE">
               <img src="img/armario2.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta 4 Peças C/ Torre Quente 100% Mdf Bariloche - Freijo / Off white</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.madeiramadeira.com.br/cozinha-compacta-7-pecas-emily-henn-626255.html?origem=pla-626255&utm_source=google&utm_medium=cpc&utm_content=cozinha-compacta&utm_term=&utm_id=16024551058&gclid=EAIaIQobChMI7Ji9i-OM9wIVDWGRCh32rw6mEAQYASABEgIKw_D_BwE">
               <img src="img/armario3.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta 7 Peças Emily Henn Branco</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.shopjm.com.br/armario-de-cozinha-grande-ipe-grafite-maranella-valdemoveis.html">
               <img src="img/armario4.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Armário De Cozinha Grande Ipê Grafite Maranella Valdemóveis</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.madeiramadeira.com.br/armario-de-cozinha-completa-valdemoveis-sena-7-portas-2-gavetas-ipe-off-white-2976622.html">
               <img src="img/armario5.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Armário de cozinha completa Valdemóveis Sena 7 portas 2 gavetas - Ipê/Off White</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          </div>');
  }elseif($lugar == 'sala'){
    echo('<div class="row">
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-mimo-1-35-veludo-rosa-b-castanho-3453034.html?seller=7232&origem=pla-3453034&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIuozP-qeH9wIVC0FIAB3znAe-EAQYBiABEgLnhvD_BwE">
         <img src="img/sofa1.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Mimo Veludo Rosa B. Castanho</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-living-istambul-em-suede-essencial-estofados-942693078.html?seller=2321&origem=pla-942693078&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=14823216613&gclid=EAIaIQobChMI3s6psKSH9wIVNnRvBB1VTwLCEAkYBSABEgIJ3_D_BwE">
         <img src="img/sofa2.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Living Istambul Em Suede Essencial Estofados</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-3-lugares-botone-beatle-daf-mobiliario-593002.html?origem=pla-593002&utm_source=google&utm_medium=cpc&utm_content=sofa-3-lugares-5144&utm_term=&utm_id=8840388917&gclid=EAIaIQobChMIgcqL5KWH9wIVAeWRCh1DIAfxEAQYESABEgL70vD_BwE"> 
         <img src="img/sofa3.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá 3 Lugares Botonê Beatle Daf Mobiliário Verde Menta</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://now.westwing.com.br/sofa-de-algodao-elis-caramelo-e-bege-6759.html?simple=DEQ20VER89648-9274&gclid=EAIaIQobChMIypvugaWI9wIVDfaRCh3IowolEAsYCyABEgLQyPD_BwE">
         <img src="img/sofaaa4.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá 5 Lugares Ipê Espresso Móveis Bege</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <div class="card">  
        <div class="zoom">
        <a href="https://www.madeiramadeira.com.br/sofa-herval-urban-3-lugares-linho-chumbo-2950967.html?seller=3853&origem=pla-2950967&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIvYOG8paI9wIVPUFIAB2orgGDEAQYJSABEgJRpfD_BwE">
         <img src="img/sofaa5.jpg"> 
        <div class="card-body">
          <h5 class="card-title">Sofá Herval Urban, 3 Lugares, Linho Chumbo</h5>
          <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-primary" type="button">comprar</button>
          </div>
           </a>
        </div>
        </div>
      </div>
  </div>
  <div class="row">
  <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.marabraz.com.br/cozinha-compacta-suspensa-c-balc-o-thais-poquema-capuccino-off-white--00879664196.html">
               <img src="img/armario1.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta Suspensa c/ Balcão Thais-Poquema - Capuccino / Off white</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.marabraz.com.br/cozinha-compacta-4-pecas-c-torre-quente-princesa-nesher-moveis-freijo-offwhite--01326938665.html?utm_term=Móveis&utm_source=google&utm_medium=flp&utm_source=google&utm_medium=cpc&utm_campaign=15990096887&gclid=EAIaIQobChMItITEo6yI9wIVz0FIAB3VvABQEAQYCSABEgL8ovD_BwE">
               <img src="img/armario2.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta 4 Peças C/ Torre Quente 100% Mdf Bariloche - Freijo / Off white</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.madeiramadeira.com.br/sofa-herval-urban-3-lugares-linho-chumbo-2950967.html?seller=3853&origem=pla-2950967&utm_source=google&utm_medium=cpc&utm_content=sofa-4-ou-mais-lugares-910&utm_term=&utm_id=13532617357&gclid=EAIaIQobChMIvYOG8paI9wIVPUFIAB2orgGDEAQYJSABEgJRpfD_BwE">
               <img src="img/armario3.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Cozinha Compacta 7 Peças Emily Henn Branco</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.shopjm.com.br/armario-de-cozinha-grande-ipe-grafite-maranella-valdemoveis.html">
               <img src="img/armario4.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Armário De Cozinha Grande Ipê Grafite Maranella Valdemóveis</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.madeiramadeira.com.br/armario-de-cozinha-completa-valdemoveis-sena-7-portas-2-gavetas-ipe-off-white-2976622.html">
               <img src="img/armario5.jpg"> 
              <div class="card-body">
                <h5 class="card-title">Armário de cozinha completa Valdemóveis Sena 7 portas 2 gavetas - Ipê/Off White</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.americanas.com.br/produto/4398637078?epar=bp_pl_00_go_mv_pmax_quarto_colchao&opn=YSMESP&WT.srch=1&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAsYBSABEgKhBfD_BwE">
               <img src="img/mesa1.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa de Escritório Office Estilo Industrial Inspire 120 cm larg Branco com cobre.</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.industrialmoveis.com.br/mesa-de-escritorio-industrial-com-1-prateleira-120x50cm-pinus-18mm?gclid=EAIaIQobChMI9eCQ5bGI9wIVATKRCh3DLQqjEAsYAiABEgLJ6PD_BwE">
               <img src="img/mesa2.png"> 
              <div class="card-body">
                <h5 class="card-title">MESA DE ESCRITÓRIO INDUSTRIAL COM 1 PRATELEIRA 120X50CM PINUS 18MM</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://now.westwing.com.br/escrivaninha-villani-branco-36346.html">
               <img src="img/mesa3.png"> 
              <div class="card-body">
                <h5 class="card-title">Escrivaninha Villani - Branco</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://www.milanistore.com.br/produto/mesa-escrivaninha-retro-02-gavetas-sky-olmo-branco-artany-181309">
               <img src="img/mesa4.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa Escrivaninha Retro 02 Gavetas Sky Olmo Branco Artany</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <div class="card">  
              <div class="zoom">
              <a href="https://produto.mercadolivre.com.br/MLB-2182498974-mesa-office-prism-patrimar-moveis-_JM?matt_tool=61275631&matt_word=&matt_source=google&matt_campaign_id=14302215501&matt_ad_group_id=134553696708&matt_match_type=&matt_network=g&matt_device=c&matt_creative=539425477561&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=216859977&matt_product_id=MLB2182498974&matt_product_partition_id=1469246871117&matt_target_id=pla-1469246871117&gclid=EAIaIQobChMImPK5n7KI9wIVATI4Ch0e9gr_EAQYCCABEgIzN_D_BwE">
               <img src="img/mesa5.png"> 
              <div class="card-body">
                <h5 class="card-title">Mesa Office Prism Patrimar Moveis</h5>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">comprar</button>
                </div>
                 </a>
              </div>
              </div>
            </div>
      </div>
    </div>');
  }else{
    echo($todos);
  }
}
    else{
      echo($todos);
    }
    ?>
</body>