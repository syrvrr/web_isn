  <body>

        <header id="head" style="height:160px;background:url(../../resources/meuligoe/images/dheader.jpg);background-size: cover;">
    
    <div class="container">
        <div id="weather">
        </div>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"></script>
        <script type="text/javascript">
            // Disable sementara selama proses perbaikan,
            // Fuad Ar-Radhi
            // 
            $(document).ready(function() {  
              getWeather(); //Get the initial weather.
              setInterval(getWeather, 600000); //Update the weather every 10 minutes.
            });

            function getWeather() {
              $.simpleWeather({
                location: '',
                woeid: '1047175',
                unit: 'f',
                success: function(weather) {
                  html = '<strong>'+weather.city+'</strong>, ';
                  html += weather.currently+' : ';
                  html += weather.alt.temp+'&deg;C';

                  /*var timestamp = moment(weather.updated);
                  html += '<p>Weather updated '+moment(timestamp).fromNow()+'</p>';*/
              
                  $("#weather").html(html);
                },
                error: function(error) {
                  $("#weather").html('<p>'+error+'</p>');
                }
              });
            }
        </script>

                    <a id="logo" href="../../index.html" title="Pemerintah Provinsi Aceh">
                <img src="https://www1-media.acehprov.go.id/uploads/logo_aceh.png">
            </a>
                </div>
        <!-- Fixed navbar -->
    


<div id="head_bottom" class="text-center">

    <div id="search" class="input-group">
                    <style>
                .gsearch input {line-height:100% !important}
                .gsearch {
                    width: 350px;
                    margin-top:0px;
                    padding: 0px;
                    background-color: rgba(0,0,0,0.1);
                    border-radius: 35px;
                    border: 1px solid rgba(0,0,0,0.15);
                }
                .gsc-search-button {display:none}
                .gsc-control-cse {
                    background:none !important;
                    border: none !important;
                    padding: 5px 10px 0px 10px;
                }
                .gsc-search-box-tools .gsc-search-box .gsc-input {padding:0px; color:black;}
                .gsib_a {width: 100%; padding: 0;}
                .gsc-input-box {border: 0px; height: 25px; background: #fff;}
                .gsc-input-box-hover {border: 0px; box-shadow: 0px; -webkit-box-shadow: inset 0px; box-shadow: inset 0 0px 0px rgba(0,0,0,.1); outline: none;}
                input#gsc-i-id1.gsc-input {margin-left: 50px; text-align: center; z-index: 1;}
            </style>
             <div class="input-group"> 
            <script>   (function() {     var cx = '007041374025790270673:y-euhbwb158';     var gcse = document.createElement('script');     gcse.type = 'text/javascript';     gcse.async = true;     gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +         '//www.google.com/cse/cse.js?cx=' + cx;     var s = document.getElementsByTagName('script')[0];     s.parentNode.insertBefore(gcse, s);   })(); </script> <div id="___gcse_0"><div class="gsc-control-cse gsc-control-cse-in"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table cellspacing="0" cellpadding="0" id="gs_id50" class="gstl_50 gsc-input" style="width: 100%; padding: 0px;"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="telusuri" id="gsc-i-id1" placeholder="Penelusuran Khusus" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; background: url(&quot;https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px; outline: none;" dir="ltr" spellcheck="false"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" style="display: none;" title="Kosongkan kotak penelusuran" role="button"><span class="gscb_a" id="gs_cb50" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>telusuri</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="hasil akhir">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-overlay"><div class="gsc-results-close-btn" tabindex="0"></div><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Penelusuran Khusus</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td><td class="gsc-orderby-container"><div class="gsc-orderby-invisible"><div class="gsc-orderby-label gsc-inline-block">Urutkan menurut:</div><div class="gsc-option-menu-container gsc-inline-block"><div class="gsc-selected-option-container gsc-inline-block"><div class="gsc-selected-option">Relevance</div><div class="gsc-option-selector"></div></div><div class="gsc-option-menu-invisible"><div class="gsc-option-menu-item gsc-option-menu-item-highlighted"><div class="gsc-option">Relevance</div></div><div class="gsc-option-menu-item"><div class="gsc-option">Date</div></div></div></div></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div><div class="gsc-modal-background-image" tabindex="0"></div></div></div></div>             </div> 
            </div>       

</div>

</header>
        <!-- START PRIMARY -->
        <div id="content">
            <div class="container">
                <div class="row">
                <!-- START CONTENT -->
                    <!-- KIRI -->
                    <div class="col-xs-8">
                        <!-- PANEL BERITA -->
<div class="panel">
      <div class="title">Indeks Berita <span>Pemerintahan</span></div>

    <div class="pd20 indexing">

                          <div class="media">
                  <a href="../read/2019/11/11/6746/pemerintahan-aceh-teken-mou-bersama-forbes-dprdpd-ri.html">
                    <span class="box box_43 thumb">
                      <span class="box_content lqd imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;https://www1-media.acehprov.go.id/uploads/IMG-20191111-WA0014-660x330.jpg&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="https://www1-media.acehprov.go.id/uploads/IMG-20191111-WA0014-660x330.jpg" style="display: none;">
                      </span>
                    </span>
                    </a><h2 class="media-heading"><a href="../read/2019/11/11/6746/pemerintahan-aceh-teken-mou-bersama-forbes-dprdpd-ri.html"></a><a href="../read/2019/11/11/6746/pemerintahan-aceh-teken-mou-bersama-forbes-dprdpd-ri.html">Pemerintahan Aceh Teken MoU Bersama Forbes DPR/DPD RI</a></h2>
                    <a href="2.html" class="label label-danger">#Pemerintahan</a>
                    <small class="tgl">Senin, 11 November 2019</small>
                  
                  <div class="isinya">
                  JAKARTA                  </div>
                  
              </div>
                          <div class="media">
                  <a href="../read/2019/11/06/6744/diskominsa-aceh-gelar-penguatan-kig-sabang.html">
                    <span class="box box_43 thumb">
                      <span class="box_content lqd imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;https://www1-media.acehprov.go.id/uploads/WhatsApp_Image_2019-11-07_at_08.08__.40__.jpeg&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="https://www1-media.acehprov.go.id/uploads/WhatsApp_Image_2019-11-07_at_08.08__.40__.jpeg" style="display: none;">
                      </span>
                    </span>
                    </a><h2 class="media-heading"><a href="../read/2019/11/06/6744/diskominsa-aceh-gelar-penguatan-kig-sabang.html"></a><a href="../read/2019/11/06/6744/diskominsa-aceh-gelar-penguatan-kig-sabang.html">Diskominsa Aceh Gelar Penguatan KIG Sabang</a></h2>
                    <a href="2.html" class="label label-danger">#Pemerintahan</a>
                    <small class="tgl">Rabu, 06 November 2019</small>
                  
                  <div class="isinya">
                  Sabang                  </div>
                  
              </div>
                          <div class="media">
                  <a href="../read/2019/11/10/6739/pemerintah-aceh-peringati-hari-pahlawan.html">
                    <span class="box box_43 thumb">
                      <span class="box_content lqd imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;https://www1-media.acehprov.go.id/uploads/IMG-20191110-WA0016-660x330.jpg&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="https://www1-media.acehprov.go.id/uploads/IMG-20191110-WA0016-660x330.jpg" style="display: none;">
                      </span>
                    </span>
                    </a><h2 class="media-heading"><a href="../read/2019/11/10/6739/pemerintah-aceh-peringati-hari-pahlawan.html"></a><a href="../read/2019/11/10/6739/pemerintah-aceh-peringati-hari-pahlawan.html">Pemerintah Aceh Peringati Hari Pahlawan</a></h2>
                    <a href="2.html" class="label label-danger">#Pemerintahan</a>
                    <small class="tgl">Minggu, 10 November 2019</small>
                  
                  <div class="isinya">
                  Banda Aceh                  </div>
                  
              </div>
                          <div class="media">
                  <a href="../read/2019/11/10/6738/hari-pahlawan-semangat-baru-melanjutkan-perjuangan.html">
                    <span class="box box_43 thumb">
                      <span class="box_content lqd imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;https://www1-media.acehprov.go.id/uploads/IMG-20191110-WA0011-660x330.jpg&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="https://www1-media.acehprov.go.id/uploads/IMG-20191110-WA0011-660x330.jpg" style="display: none;">
                      </span>
                    </span>
                    </a><h2 class="media-heading"><a href="../read/2019/11/10/6738/hari-pahlawan-semangat-baru-melanjutkan-perjuangan.html"></a><a href="../read/2019/11/10/6738/hari-pahlawan-semangat-baru-melanjutkan-perjuangan.html">Hari Pahlawan, Semangat Baru Melanjutkan Perjuangan</a></h2>
                    <a href="2.html" class="label label-danger">#Pemerintahan</a>
                    <small class="tgl">Minggu, 10 November 2019</small>
                  
                  <div class="isinya">
                  Banda Aceh                  </div>
                  
              </div>
                          <div class="media">
                  <a href="../read/2019/11/05/6729/plt-gubernur-instruksikan-seluruh-dinas-ikut-promosikan-wisata-aceh.html">
                    <span class="box box_43 thumb">
                      <span class="box_content lqd imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;https://www1-media.acehprov.go.id/uploads/DADEK-660x330.jpeg&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="https://www1-media.acehprov.go.id/uploads/DADEK-660x330.jpeg" style="display: none;">
                      </span>
                    </span>
                    </a><h2 class="media-heading"><a href="../read/2019/11/05/6729/plt-gubernur-instruksikan-seluruh-dinas-ikut-promosikan-wisata-aceh.html"></a><a href="../read/2019/11/05/6729/plt-gubernur-instruksikan-seluruh-dinas-ikut-promosikan-wisata-aceh.html">Plt Gubernur Instruksikan Seluruh Dinas Ikut Promosikan Wisata Aceh</a></h2>
                    <a href="2.html" class="label label-danger">#Pemerintahan</a>
                    <small class="tgl">Selasa, 05 November 2019</small>
                  
                  <div class="isinya">
                  Banda Aceh                  </div>
                  
              </div>
                          <div class="media">
                  <a href="../read/2019/11/03/6728/plt-gubernur-aceh-perintahkan-inspektur-periksa-tim-beasiswa-bpsdm.html">
                    <span class="box box_43 thumb">
                      <span class="box_content lqd imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;https://www1-media.acehprov.go.id/uploads/Tim_Beasiswa.png&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="https://www1-media.acehprov.go.id/uploads/Tim_Beasiswa.png" style="display: none;">
                      </span>
                    </span>
                    </a><h2 class="media-heading"><a href="../read/2019/11/03/6728/plt-gubernur-aceh-perintahkan-inspektur-periksa-tim-beasiswa-bpsdm.html"></a><a href="../read/2019/11/03/6728/plt-gubernur-aceh-perintahkan-inspektur-periksa-tim-beasiswa-bpsdm.html">Plt Gubernur Aceh Perintahkan Inspektur Periksa Tim Beasiswa BPSDM</a></h2>
                    <a href="2.html" class="label label-danger">#Pemerintahan</a>
                    <small class="tgl">Minggu, 03 November 2019</small>
                  
                  <div class="isinya">
                  BANDA ACEH                  </div>
                  
              </div>
                          
                          <center>
                <div class="pagination">              
                  <ul class="pagination pagination-sm"><li class="selected"><a href="#">1</a></li><li><a href="2/10.html">2</a></li><li><a href="2/20.html">3</a></li><li><a href="2/30.html">4</a></li><li><a href="2/40.html">5</a></li><li><a href="2/10.html">&gt;</a></li><li><a href="2/2210.html">Last ›</a></li></ul>                </div>
              </center>
                
        	</div>
            
         
          <div class="col-xs-4 padding_left sidebar">
                      </div>
      
      <div class="clearfix"></div>
      
    </div>
                    </div>
                    <!-- KANAN -->
                    <div class="col-xs-4">
                        
<!-- PANEL BERITA -->
<div class="panel">
  <div class="title" id="grad1"><a href="../../news.html">Berita <span>Terbaru</span></a></div>
    <div class="pd20 kirinan">
      <ul class="list bullet">
                <li>
          <a href="../read/2019/11/11/6746/pemerintahan-aceh-teken-mou-bersama-forbes-dprdpd-ri.html">
            <h2 class="title_item">Pemerintahan Aceh Teken MoU Bersama Forbes DPR/DPD RI</h2>
          </a>
          <small class="tgl">Senin, 11 November 2019</small>
        </li>
              <li>
          <a href="../read/2019/11/12/6745/generasi-sehat-indonesia-unggul.html">
            <h2 class="title_item">Generasi Sehat Indonesia Unggul</h2>
          </a>
          <small class="tgl">Selasa, 12 November 2019</small>
        </li>
              <li>
          <a href="../read/2019/11/06/6744/diskominsa-aceh-gelar-penguatan-kig-sabang.html">
            <h2 class="title_item">Diskominsa Aceh Gelar Penguatan KIG Sabang</h2>
          </a>
          <small class="tgl">Rabu, 06 November 2019</small>
        </li>
              <li>
          <a href="../read/2019/11/10/6743/press-rilis-organisasi-digital-nasional-pertama-resmi-dilantik-di-aceh.html">
            <h2 class="title_item">Press Rilis : Organisasi Digital Nasional Pertama Resmi dilantik di Aceh</h2>
          </a>
          <small class="tgl">Minggu, 10 November 2019</small>
        </li>
              <li>
          <a href="../read/2019/11/06/6742/banda-aceh-terima-penghargaan-smart-city-dari-kemkominfo.html">
            <h2 class="title_item">Banda Aceh Terima Penghargaan Smart City dari Kemkominfo</h2>
          </a>
          <small class="tgl">Rabu, 06 November 2019</small>
        </li>
          </ul>
  </div>  
</div>

<!-- PANEL TABS JELAJAH -->
<div class="panel">
  <div class="tab_nav tab_small tabs">
    <a href="#jelajah1" class="col-xs-6 selected">Jelajah <span>Aceh</span></a>
    <a href="#serba1" class="col-xs-6">Serba <span>Serbi</span></a>
  </div>
  <div class="clearfix"></div>

  <div id="jelajah1" class="tab_content" style="display: block;">
    <ul class="list bullet">
              <li><a href="../../jelajah/category/4/sejarah.html">Sejarah</a></li>
              <li><a href="../../jelajah/category/5/adat-dan-budaya.html">Adat dan Budaya</a></li>
              <li><a href="../../jelajah/category/6/alat-musik-dan-kesenian.html">Alat Musik dan Kesenian</a></li>
              <li><a href="../../jelajah/category/7/cerita-dan-legenda-rakyat.html">Cerita dan Legenda Rakyat</a></li>
              <li><a href="../../jelajah/category/8/pahlawan.html">Pahlawan</a></li>
          </ul>
  </div>

  <div id="serba1" class="tab_content row" style="display: none;">
    <div class="pd10">
      <ul class="list bullet">
                  <li><a href="../../directory/category/13/perbankan.html">Perbankan</a></li>
                  <li><a href="../../directory/category/31/lowongan-kerja.html">Lowongan Kerja</a></li>
                  <li><a href="../../directory/category/32/rubrik.html">Rubrik</a></li>
                  <li><a href="../../directory/category/33/pendidikan-dan-beasiswa.html">Pendidikan dan Beasiswa</a></li>
                  <li><a href="../../directory/category/34/kompetisi.html">Kompetisi</a></li>
              </ul>
    </div>
  </div>

</div> <!-- /box : tabs -->


</div>

</div></div></div>
                    <!-- tag close div berada di container_sidebar -->
                
            
        

        
<footer>

      <div class="container wrap_slide">

        <a href="#" id="prev_link" style="background: rgb(204, 218, 209); display: block;" class=""><img src="https://www1-media.acehprov.go.id/resources/meuligoe/images/prev.png"></a>
        <a href="#" id="next_link" style="background: rgb(204, 218, 209); display: block;" class=""><img src="https://www1-media.acehprov.go.id/resources/meuligoe/images/next.png"></a>
        
        <div class="o_hidden">
          <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1024px; height: 63px; margin: 30px 0px; overflow: hidden;"><div id="slide_links" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 5632px; height: 63px; z-index: auto;">
                        
                        
                        
                        
                        <a target="_blank" href="https://www.lapor.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/lapor_logo.png">
            </a>
                        <a target="_blank" href="http://dka.acehprov.go.id/index.php/page/11/transparansi-keuangan" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/frame-4.png">
            </a>
                        <a target="_blank" href="http://lpse.acehprov.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/frame-3.png">
            </a>
                        <a target="_blank" href="http://humas.acehprov.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/frame-2.png">
            </a>
                        <a target="_blank" href="https://sirup.lkpp.go.id/sirup/ro/rekap/klpd/D1" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/frame-1.png">
            </a>
                      <a target="_blank" href="http://bp2t.acehprov.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/bp2t1.png">
            </a><a target="_blank" href="http://www.trustpositif.kominfo.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/trust+1.png">
            </a><a target="_blank" href="http://ppid.acehprov.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/frame-7.png">
            </a><a target="_blank" href="http://pusbindiklatren.bappenas.go.id/" class="item">
              <img src="https://www1-media.acehprov.go.id/uploads/frame-6.png">
            </a></div></div>
        </div>

      </div>

      <div id="feed">
        
        <div class="container">
          <div class="row">

            <div class="col-xs-3">
              <!-- PANEL AGENDA -->
              <div class="panel">
                <div class="title"><a href="../../event/index_feed.html">Agenda <span>SKPA</span></a></div>

                <div class="content">
                                  <div class="media agenda">
                    <a href="http://acehjayakab.go.id/index.php/event/read/2019/10/31/184/sosialisasi-pemberdayaan-perempuan-perlindungan-anak-dan-keluarga.html" target="_blank">
                        <span class="label label-warning">31-10-2019</span><br>
                        <strong>Sosialisasi Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga<br></strong>
                        <p>Kabupaten Aceh Jaya</p>
                      
                    </a>
                  </div>
                                  <div class="media agenda">
                    <a href="http://acehjayakab.go.id/index.php/event/read/2018/04/23/173/ceramah-uas.html" target="_blank">
                        <span class="label label-warning">23-04-2018</span><br>
                        <strong>Ceramah UAS<br></strong>
                        <p>Kabupaten Aceh Jaya</p>
                      
                    </a>
                  </div>
                                  <div class="media agenda">
                    <a href="http://acehjayakab.go.id/index.php/event/read/2018/04/22/172/fun-bike-fun-walk.html" target="_blank">
                        <span class="label label-warning">22-04-2018</span><br>
                        <strong>FUN Bike  FUN Walk<br></strong>
                        <p>Kabupaten Aceh Jaya</p>
                      
                    </a>
                  </div>
                                  <div class="media agenda">
                    <a href="http://acehjayakab.go.id/index.php/event/read/2018/04/20/171/sosialisasi-cru.html" target="_blank">
                        <span class="label label-warning">20-04-2018</span><br>
                        <strong>Sosialisasi CRU<br></strong>
                        <p>Kabupaten Aceh Jaya</p>
                      
                    </a>
                  </div>
                                  <div class="media agenda">
                    <a href="http://acehjayakab.go.id/index.php/event/read/2018/04/20/170/pelantikan-imum-mukim-calang.html" target="_blank">
                        <span class="label label-warning">20-04-2018</span><br>
                        <strong>Pelantikan Imum Mukim Calang<br></strong>
                        <p>Kabupaten Aceh Jaya</p>
                      
                    </a>
                  </div>
                                  <div class="media agenda">
                    <a href="http://acehjayakab.go.id/index.php/event/read/2018/04/23/174/monitoring-un-tingkat-smp.html" target="_blank">
                        <span class="label label-warning">23-04-2018</span><br>
                        <strong>Monitoring UN Tingkat SMP<br></strong>
                        <p>Kabupaten Aceh Jaya</p>
                      
                    </a>
                  </div>
                
                </div>

              </div>
            </div>

                                <!-- FEED KOTA GOES HERE -->
            
            <!-- <div class="col-xs-3">
              <div class="panel">
                <div class="title">Berita <span>SKPA/D</span></div>

                <div class="content">

                  <ul class="list_item black">
                                        <li>
                      <a href="" target="_blank"></a><br>
                      <small class="tgl">Sumber: </small>
                    </li>
                                      </ul>

                </div>

              </div>
            </div> -->

            
            <div class="col-xs-3">
              <!-- PANEL BERITA -->
              <div class="panel">
                <div class="title"><a href="../index_feed.html">Berita <span>SKPA</span></a></div>

                <div class="content">

                  <ul class="list_item">
                                        <li>
                      <a href="http://acehbesarkab.go.id/index.php/news/read/2019/11/06/771/tim-gizi-simpang-tiga-door-to-door-edukasi-anak-sehat.html" target="_blank">Tim Gizi Simpang Tiga Door To Door Edukasi Anak Sehat</a>
                      <small class="tgl">Sumber: Kabupaten Aceh Besar</small>
                    </li>
                                        <li>
                      <a href="http://www.sabangkota.go.id/index.php/news/read/2019/10/15/183/wakil-walikota-resmikan-mesin-pltd-baru-pln-sabang.html" target="_blank">Wakil Walikota Resmikan Mesin PLTD Baru PLN Sabang</a>
                      <small class="tgl">Sumber: Kota Sabang</small>
                    </li>
                                        <li>
                      <a href="https://distanbun.acehprov.go.id/index.php/news/read/2019/10/17/982/pembangunan-perkebunan-di-era-industri-40.html" target="_blank">Pembangunan Perkebunan di Era Industri 4.0</a>
                      <small class="tgl">Sumber: Dinas Pertanian dan Perkebunan Aceh</small>
                    </li>
                                        <li>
                      <a href="http://acehjayakab.go.id/index.php/news/read/2019/11/06/544/khanduri-laot-sebagai-wujud-syukur-atas-limpahan-rezeki.html" target="_blank">Khanduri Laot Sebagai Wujud Syukur atas Limpahan Rezeki</a>
                      <small class="tgl">Sumber: Kabupaten Aceh Jaya</small>
                    </li>
                                        <li>
                      <a href="https://dpmg.acehprov.go.id/index.php/news/read/2019/11/06/88/4969-murid-tkra-diberi-makanan-tambahan.html" target="_blank">4969 MURID TK/RA DIBERI MAKANAN TAMBAHAN</a>
                      <small class="tgl">Sumber: Dinas Pemberdayaan Masyarakat dan Gampong</small>
                    </li>
                                        <li>
                      <a href="https://dinsos.acehprov.go.id/index.php/news/read/2019/10/31/228/genjot-pembangunan-kesejahteraan-sosial-aceh-melalui-perencanaan.html" target="_blank">Genjot Pembangunan Kesejahteraan Sosial Aceh Melalui Perencanaan </a>
                      <small class="tgl">Sumber: Dinas Sosial Aceh</small>
                    </li>
                                        <li>
                      <a href="https://diskop.acehprov.go.id/index.php/news/read/2019/11/04/192/kegiatan-pelatihan-teknis-pemeriksaan-bagi-pengawas-koperasi-angkatan-i-dan-angkatan-ii.html" target="_blank">Kegiatan Pelatihan Teknis Pemeriksaan Bagi Pengawas Koperasi Angkatan I dan Angkatan II</a>
                      <small class="tgl">Sumber: Dinas Koperasi dan UKM Aceh</small>
                    </li>
                                        <li>
                      <a href="http://acehjayakab.go.id/index.php/news/read/2019/10/15/530/bupati-aceh-jaya-serahkan-dokumen-kek-dan-kit-kepada-plt-gubernur-aceh.html" target="_blank">Bupati Aceh Jaya Serahkan Dokumen KEK dan KIT  kepada Plt Gubernur Aceh</a>
                      <small class="tgl">Sumber: Kabupaten Aceh Jaya</small>
                    </li>
                                      </ul>

                </div>

              </div>
            </div>

            
            <div class="col-xs-3">
              <!-- PRODUK HUKUM -->
              <div class="panel">
                <div class="title"><a href="../../hukum/index_feed.html">Produk Hukum <span>SKPA</span></a></div>

                <div class="content">

                  <ul class="list orange">
                                        <li>
                      <a href="http://simeuluekab.go.id/index.php/hukum/read/15/qanun-kabupaten-simeulue-nomor-4-tahun-2015.html" target="_blank">QANUN KABUPATEN SIMEULUE NOMOR 4 TAHUN 2015</a>
                    </li>
                                        <li>
                      <a href="http://simeuluekab.go.id/index.php/hukum/read/19/fatwa-majelis-permusyawaratan-ulama-aceh-nomor-12-tahun-2013.html" target="_blank">FATWA MAJELIS PERMUSYAWARATAN ULAMA ACEH NOMOR 12 TAHUN 2013</a>
                    </li>
                                        <li>
                      <a href="http://simeuluekab.go.id/index.php/hukum/read/23/fatwa-majelis-permusyawaratan-ulama-aceh-nomor-27-tahun-2015.html" target="_blank">FATWA MAJELIS PERMUSYAWARATAN ULAMA ACEH NOMOR 27 TAHUN 2015</a>
                    </li>
                                        <li>
                      <a href="http://simeuluekab.go.id/index.php/hukum/read/17/qanun-aceh-nomor-8-tahun-2012.html" target="_blank">QANUN ACEH NOMOR 8 TAHUN 2012</a>
                    </li>
                                        <li>
                      <a href="http://simeuluekab.go.id/index.php/hukum/read/16/qanun-kabupaten-simeulue-nomor-6-tahun-2015.html" target="_blank">QANUN KABUPATEN SIMEULUE NOMOR 6 TAHUN 2015</a>
                    </li>
                                        <li>
                      <a href="http://simeuluekab.go.id/index.php/hukum/read/22/fatwa-majelis-permusyawaratan-ulama-aceh-nomor-18-tahun-2015.html" target="_blank">FATWA MAJELIS PERMUSYAWARATAN ULAMA ACEH NOMOR 18 TAHUN 2015</a>
                    </li>
                                      </ul>

                </div>

              </div>
            </div>

            <div class="col-xs-3">
              <!-- JADWAL SHOLAT -->
              <div class="panel">
                <div class="title">Jadwal <span>Sholat</span></div>

                <div class="content">

                    <small><strong>Lokasi  :</strong>
                    Banda Aceh</small><br>
                    <small><strong>Tanggal  : 12-11-2019</strong></small>
                    <br>                    
                                        <style>
                    .sumber_jadwal, .sumber_jadwal a {
                          color: #DC9107;
                          font-size: 10px;
                          margin-top: 5px;
                      }
.waktu-container {
    padding: 0;
    width: 100%;
    padding: 0;
    float: left;
    overflow: hidden;
    margin-top: 10px;
    margin-bottom: 10px;
    /* border-bottom: 1px solid #2d2d2d; */
}
.waktu-container .waktu {
    background: #333333;
    width: 100%;
    height: 33px;
    margin: 0;
    padding: 2px;
    overflow: hidden;
    position: relative;
    margin: 2px 10px 0 0;
    border-bottom: 1px solid #333;
}
.waktu-container .waktu .title {
    color: #ff9c00;
    font-weight: bold;
        background: rgba(49, 49, 49, 0.7);
    font-size: 12px;
    float: left;
    border-bottom: none;
    width: 110px;
    margin-right: 10px;
    padding: 4px 0 4px 10px;
}
.waktu-container .waktu .pukul {
    /* font-family: 'digital-7regular'; */
    color: #e0e0e0;
    font-size: 12px;
    /* font-weight: bold; */
    padding: 5px 5px 0 0;
    /* float: right; */
}
                    </style>
                    <div class="sumber_jadwal">Sumber: <a href="http://sihat.kemenag.go.id/" target="_blank">http://sihat.kemenag.go.id/</a></div>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>

<style>
.feed_list ul{
padding:0;
}
.feed_list li{
float:left;
list-style:none;
padding:7px 10px;
}
</style>
	<div class="feed_list">
	<div class="container">
	
	<ul>
	<li><a href="../feed.xml">RSS Berita</a></li>
	<li><a href="../../event/feed.xml">RSS Agenda</a></li>
	</ul>
	</div>
	</div>

      <div id="copy">
        
        <div class="container">
          <div class="sosmed">
                            <a href="http://www.facebook.com/pages/Provinsi-Aceh/326019957540137">
                    <img src="https://www1-media.acehprov.go.id/resources/meuligoe/images/ico_fb.gif"> Kunjungi halaman Facebook</a>
                  
                            <a href="http://twitter.com/acehprov">
                    <img src="https://www1-media.acehprov.go.id/resources/meuligoe/images/ico_tw.gif"> Ikuti Twitter kami</a>
                    </div>

        <strong>© 2019 Pemerintah Aceh</strong>
	<p>Kantor Gubernur / Sekretariat Daerah Aceh</p>
<p>Jl.T.Nyak Arief No. 219 Banda Aceh 23114 Telp : 0651-7551377</p>
<p>Fax : 0651-7552307, 7555516, 7555517, 7555518, 7553048</p>                Email: humas[at]acehprov.go.id, pengelola[at]acehprov.go.id               
        </div>

      </div>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="../../resources/meuligoe/js/handlebars.js"></script>
    <script src="../../resources/meuligoe/js/bootstrap.min.js"></script>
    <script src="../../resources/meuligoe/js/jquery.caroufredsel.min.js"></script>
    <script src="../../resources/meuligoe/js/imgLiquid-min.js"></script>
    <script src="../../resources/meuligoe/js/idTabs.js"></script>
    <script src="../../resources/meuligoe/js/jquery.sticky-kit.min.js"></script>
    <script src="../../resources/meuligoe/js/jquery.liMarquee.js"></script>
    <script src="../../resources/meuligoe/js/controller.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../resources/meuligoe/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../../resources/meuligoe/js/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="../../resources/meuligoe/js/lightbox.min.js"></script>
    <script src="../../resources/meuligoe/js/jquery.bootstrap.newsbox.min.js"></script>


<div class="last-update">Last Update Generator: 12 Nov 2019 06:00:06</div>       
        
         
        
    
    


<!-- Mirrored from mirror.acehprov.go.id/news/category/2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2019 23:01:26 GMT -->

<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src=""><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><table cellspacing="0" cellpadding="0" class="gstl_50 gssb_c" style="width: 97px; display: none; top: 171px; left: 551px; position: absolute;"><tbody><tr><td class="gssb_f"></td><td class="gssb_e" style="width: 100%;"></td></tr></tbody></table>
</body></html>