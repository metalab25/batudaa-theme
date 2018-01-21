<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div id="footer">
	<div class='container'>
		<div class='row'>
			<div class='col-md-6 col-xs-3 lang'>
				<div class="footer-copyleft">
				<span id="header_sebutan_desa"><?php echo ucwords($this->setting->sebutan_desa)." "?><?php echo ucwords($desa['nama_desa'])?></span><br />
				<?php echo $desa['alamat_kantor']?> - Kode Pos <?php echo $desa['kode_pos']?><br />
				<?php echo ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan'])?>, <?php echo ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten'])?><br />
				<i class="fa fa-phone-square"></i><?php echo $desa['telepon']?> - <i class="fa fa-envelope"></i><?php echo $desa['email_desa']?><br />
				<i class="fa fa-globe"></i><?php echo $desa['website']?>
				</div>
			</div>
			<div class='col-md-6 col-xs-9 text-right'>
				<div class='footer-copyleft'><a href="https://www.facebook.com/groups/opensid/" target='_new' title='Forum'>Komunitas</a> <a href="<?php echo site_url('siteman')?>" target='_new' title='Login'>OpenSID</a> &copy; 2017</div>
				<div>Content by &reg; <?php echo ucwords($this->setting->sebutan_desa) . ' ' . trim($desa['nama_desa']) . ', ' . ucwords($this->setting->sebutan_kabupaten) . ' ' . $desa['nama_kabupaten']; ?></div>
				<div>
				<a href="<?php echo $sosmed[nested_array_search('Facebook',$sosmed)]['link']?>" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
				<a href="<?php echo $sosmed[nested_array_search('Twitter',$sosmed)]['link']?>" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a>
				<a href="<?php echo $sosmed[nested_array_search('YouTube',$sosmed)]['link']?>" target="_blank"><i class="fa fa-youtube-square fa-lg"></i></a>
				<a href="<?php echo $sosmed[nested_array_search('Google Plus',$sosmed)]['link']?>" target="_blank"><i class="fa fa-google-plus-square fa-lg"></i></a>
				<a href="<?php echo $sosmed[nested_array_search('Instagram',$sosmed)]['link']?>" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></div>
			</div>
			
		</div>
	</div>
</div>