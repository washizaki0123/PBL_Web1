<div class="pb_home">
  <h2>ホーム画面</h2>
    <?php
      if (isset($_SESSION['usertype_id'])){
        if ($_SESSION['usertype_id']==='9'){  //管理者
          echo '<button type="button">管理者情報変更</buton>';
          echo '<button type="button">アカウント一覧表示</buton>';
        }
      }
    ?>
</div>