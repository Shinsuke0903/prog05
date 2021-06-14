<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>マイページ</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sample1.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- ヘッダーを書いていく -->
    <header>
      <h1>マイページ</h1>
    </header>
    <main>
      <!-- 全体の作成 -->
      <div class="top-wrapper">
        <!-- 上部左の設定 -->
        <div class="items">
          <!-- プロフィール写真の設定 -->
          <div class="prof">
            <div class="prof-image">
              <img src="imgs/101.jpeg" alt="" class="prof-image1">
            </div>
            <p>Shinsuke</p>
          </div>
          <!-- ご飯のリクエストのボタン -->
          <div class="design">
            <div class="request">
                <a href="request.html" class="btn-gradation" id="analysis">ご飯の量をリクエスト</a>
            </div>
          </div>
          <!-- これまでリクエストした内容を表示 -->
          <div class="chart"> 
              <table>
                  <!-- 項目名を書いていく -->
                  <tr>
                      <th>
                          日付
                      </th>
                      <th>
                          店名
                      </th>
                      <th>
                          メニュー
                      </th>
                      <th>
                          ご飯の量(g)
                      </th>
                      
                  </tr>
                  <!-- 一行目を書いていく -->
                  <tr>
                    <td>
                        4/24土
                    </td>
                    <td>
                        大戸屋

                    </td>
                    <td>
                        からあげ定食

                    </td>
                    <td>
                        50

                    </td>

                  </tr>

              </table>

          </div>
        </div>
        <!-- 上部真ん中map部分の作成 -->
        <div class="stores">
            <!-- 加盟店の表示(4つ) -->
            <div class="add-store">
                <div class="top1">
                    <h1>加盟店一覧</h1>
                </div>
                <div class="middle1">
                    <div class="add-store1">
                        <div class="store-item">
                            <h2>A店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img1">

                            </div>
                        </div>
                        <div class="store-comment">
                            <p>ジェノベーゼのパスタがウリです</p>
                        </div>
                    </div>
                    <div class="add-store2">
                        <div class="store-item">
                            <h2>B店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img2">

                            </div>
                        </div>
                        <div class="store-comment">
                            <p>卵にこだわっています</p>
                        </div>
                    </div>
                    <div class="add-store3">
                        <div class="store-item">
                            <h2>C店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img3">
                            </div>
                        </div>
                        <div class="store-comment">
                            <p>ウマい、早い、安い</p>
                        </div>
                    </div>
                    <div class="add-store4">
                        <div class="store-item">
                            <h2>D店</h2>

                        </div>
                        <div class="store-imgs">
                            <div class="store-img4">

                            </div>
                        </div>
                        <div class="store-comment">
                            <p>極上のカレーです</p>

                        </div>

                    </div>
                </div>
                <div class="bottom1">
                    <a href="#">一覧を表示</a>
                </div>
            </div>
            <!-- 過去にリクエストした(行った)お店の表示(4つ)  -->
            <div class="add-store">
                <div class="top1">
                    <h1>過去履歴</h1>
                </div>
                <div class="middle1">
                    <div class="past-store1">
                        <div class="store-item">
                            <h2>A店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img5">
                            </div>

                        </div>
                        <div class="store-comment">
                            <p>おいしかった</p>
                        </div>
                        
                    </div>
                    <div class="past-store2">
                        <div class="store-item">
                            <h2>B店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img6"></div>
                        </div>
                        <div class="store-comment">
                            <p>味は普通</p>
                        
                        </div>
                    </div>
                    <div class="past-store3">
                        <div class="store-item">
                            <h2>C店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img7"></div>
                        </div>
                        <div class="store-comment">
                            <p>行きつけにしたい</p>
                        </div>

                    </div>
                    <div class="past-store4">
                        <div class="store-item">
                            <h2>D店</h2>
                        </div>
                        <div class="store-imgs">
                            <div class="store-img8"></div>
                        </div>
                        <div class="store-comment">
                            <p>近いからまたいく</p>
                        </div>

                    </div>
                </div>
                <div class="bottom1">
                    <a href="#">一覧を表示</a>
                </div>

            </div>
        </div>
    </div>
      
       
    </main>
    <!-- フッターの作成 -->
    <footer>
      <p class="last">copyrights 2021 Metalife All RIghts Reserved.</p>
    </footer>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <!--   
      <script src="js/jquery-2.1.3.min.js"></script>
      <script src="js/action.js"></script>
    JQuery -->
      <!-- JQuery -->
      <!--** 以下Firebase **-->
      <!-- The core Firebase JS SDK is always required and must be listed first -->
      <!-- 6.6.1に該当する箇所はfirebaseのバージョンですので更新されるたびに随時変わります🤗    8.6.2に変える必要がある -->
      <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      
      <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#config-web-app -->
      <script src="js/syokugo1.js"></script>
      <!-- /MapArea -->
      <!-- jQuery&GoogleMapsAPI -->
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=Ah09rxoHoMfDGlwhs8hKdsf6iKTzh81JHzQo9mU3AzIvpWSzVRT9R4mchbwbxRhB'
        async defer></script>
      <script src="js/BmapQuery.js"></script>
  </body>
</html>