<?php
$signedin = $this->session->userdata('user_email');
if(!$signedin){
  redirect('user/login');
}
 ?>
<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
  <div class="container">
    <div class="row">
      <div class="register-panel" style="max-width: 550px;">
        <center>
          <img  src="<?php echo base_url('img/icon.png') ?>" style="width: 80px;" />
        </center>
        <h4 class="text-center"><b>Thank you for Joining us on social media platforms!</b></h4>
        <center>
          Now reffer your friends to  earn more MONA coins.
          Each successful refferal will get you 25 MONA coins.
        </center>
        <br>
        <div style="position:relative;">
        <p id="reflink"><?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?></p><button class="copy-btn" onclick="copyToClipboard('#reflink')">Copy</button>
        </div>
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <span>Share on social media:</span>
            <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a>-->
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_telegram"></a>
          </div>
          <script>
          var a2a_config = a2a_config || {};
          a2a_config.linkname = "🔥 Monacoin Exclusive Airdop 🔥 We Believe the community is the biggest asset. Therefore, we want to spread our love by offering an Airdrop. Apply and get 50 MONA.";
          a2a_config.linkurl = "<?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?>";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->

          <div class="outer-box">
                <div class="box">
                  <p>Reffered</p>
                  <span><?php echo $this->session->userdata('myrefferals'); ?></span>
                  <span>Users</span>
                </div>
                <div class="box">
                  <p>Earned</p>
                  <span><?php
                  $amount = (($this->session->userdata('myrefferals')*25)+50);

                    if( $amount > 150000 ) {
                      echo '150000';
                    }
                    else {
                      echo $amount;
                    }

                    ?></span>
                  <span>MONA</span>
                </div>
          </div>
          <div class="cursor-banned withdraw-info">
            <label class="has-float-label cursor-banned">
              <input type="text" id="wallet" name="wallet" class="cursor-banned" placeholder="Wallet Address" style="font-size: 10px;" disabled/>
              <span class="cursor-banned" style="font-size: 13px;">Withdraw Address</span>
            </label>
            <button class="copy-btn cursor-banned">Withdraw</button>
            <div class="cursor-banned">
              <small class="cursor-banned">After reaching 25k airdrop participants the withdraw functionality will be enabled. Until then stay calm and refer more people to Monacoin.</small>
            </div>
          </div>
          <small><b>Warning:</b> If we find any unusual activities like multiple accounts, bots, etc.. on your refferal link. Your account will be completely banned without any prior notice.</small>
          <br>
          <br>
          <p>Please follow and stay on our social media channels to receive the airdrop. Here are our social media platform links: <a href="https://t.me/CoinFirefly" target="_blank">Telegram</a>, <a href="https://twitter.com/CoinFirefly" target="_blank">Twitter</a> and <a href="https://www.facebook.com/fireflycoin/" target="_blank">Youtube</a>.</p>
        </div>
      </div>
    </div>
  </div>
</header>
<?php $this->load->view('footer'); ?>
<!--<a href="?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>-->
