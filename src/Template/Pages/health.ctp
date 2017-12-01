<?php $title = 'Eatlixir';?>
<style>footer{
  display: none;
}</style>
<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<!--
 * ApiMedic.com Sample Avatar, a demo implementation of the ApiMedic.com Symptom Checker by priaid Inc, Switzerland
 *
 * Copyright (C) 2012 priaid inc, Switzerland
 *
 * This file is part of The Sample Avatar.
 *
 * This is free implementation: you can redistribute it and/or modify it under the terms of the
 * GNU General Public License Version 3 as published by the Free Software Foundation.
 *
 * The ApiMedic.com Sample Avatar is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU General Public License for more details. You should have received a copy of the GNU
 * General Public License along with ApiMedic.com. If not, see <http://www.gnu.org/licenses/>.
 *
 * Authors: priaid inc, Switzerland
 * Modified by Su Li
-->
  <?= $this->Html->script('apimedic/json2.js') ?>
  <?= $this->Html->script('apimedic/jquery.imagemapster.min.js') ?>
  <?= $this->Html->script('apimedic/typeahead.bundle.js') ?>
  <?= $this->Html->script('apimedic/selector.js') ?>
  <?= $this->Html->css('selector.css') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
	<?php
	if ( !isset( $_SESSION['userToken']) || !isset( $_SESSION['tokenExpireTime']) || time() >= $_SESSION['tokenExpireTime'] )
	{
    class TokenGenerator
    {
    private $authServiceUrl = '';
		private $username = '';
		private $password = '';

        function __construct($username, $pasword, $authServiceUrl) {
            $this->username = $username;
            $this->password = $pasword;
            $this->authServiceUrl = $authServiceUrl;
        }

		public function loadToken()
		{
			$computedHash = base64_encode(hash_hmac ( 'md5' , $this->authServiceUrl , $this->password, true ));
			$authorization = 'Authorization: Bearer '.$this->username.':'.$computedHash;

			$curl = curl_init();
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, '');
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
			curl_setopt($curl, CURLOPT_URL, $this->authServiceUrl);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

			$result = curl_exec($curl);
            $obj = json_decode($result);
            $info = curl_getinfo($curl);
            curl_close($curl);

            if($info['http_code'] != '200')
            {
                // print error from the server
                echo($obj);
                return NULL;
            }

            return $obj;
		}
    }
		$tokenGenerator = new TokenGenerator("rice74@uw.edu","m6R7HzJe5r9K8Fdk4","https://sandbox-authservice.priaid.ch/login");
		$token = $tokenGenerator->loadToken();
		$_SESSION['userToken'] = $token->{'Token'};
		$_SESSION['tokenExpireTime'] = time() + $token->{'ValidThrough'};
	}

	$token = $_SESSION['userToken'];
	?>

	<script type="text/javascript">

		var userToken = <?php echo "'".$token."'" ?>;

        $(document).ready(function () {
            $("#symptomSelector").symptomSelector(
            {
                mode: "diagnosis",
                webservice: "https://sandbox-healthservice.priaid.ch",
                language: "en-gb",
                specUrl: "sample_specialisation_page",
                accessToken: userToken
            });
        });
    </script>
<section>
    <table class="container-table">
        <tr>
            <td valign="middle" colspan="2" class="td-header box-white bordered-box width50"><h4 class="header" id="selectSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">1</span></h4></td>
            <td valign="middle" class="td-header bordered-box box-white width25"><h4 class="header" id="selectedSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">2</span></h4></td>
            <td valign="middle" class="td-header bordered-box box-white width25"><h4 class="header" id="possibleDiseasesTitle"><span class="badge pull-left badge-primary visible-lg margin5R">3</span></h4></td>
        </tr>
        <tr>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomSelector"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="selectedSymptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="diagnosisList"></div></td>
        </tr>
    </table>
</section>
