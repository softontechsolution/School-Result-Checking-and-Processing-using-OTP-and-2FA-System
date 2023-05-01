<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">User Profile</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">User</li>
        </ol>
        <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
        <!-- Content Row -->
        <div class="row">

            <div class="col-md-12">
                
                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Edit User Details</h4>
                        <a href="view-register.php" class="btn btn-danger float-end">BACK</a>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $users = "SELECT * FROM users WHERE id='$user_id' ";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach($users_run as $user)
                                {
                                ?>

                                <form action="update-code.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?=$user['id'];?>">

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Full Name</label>
                                            <input type="text" name="name" value="<?=$user['username'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Email</label>
                                            <input type="text" name="email" value="<?=$user['email'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Phone Number</label>
                                            <input type="number" name="phone" value="<?=$user['phone'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Date of Birth</label>
                                            <input type="date" name="dob" value="<?=$user['dateofbirth'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Country</label>
                                            <select id="country" name="country" class="form-control">
                                                <option>Please Select Your Country</option>
                                                <option value="AF" <?=$user['country'] == 'AF'? 'selected':'' ?> >Afghanistan</option>
                                                <option value="AX" <?=$user['country'] == 'AX'? 'selected':'' ?> >Aland Islands</option>
                                                <option value="AL" <?=$user['country'] == 'AL'? 'selected':'' ?> >Albania</option>
                                                <option value="DZ" <?=$user['country'] == 'DZ'? 'selected':'' ?> >Algeria</option>
                                                <option value="AS" <?=$user['country'] == 'AS'? 'selected':'' ?> >American Samoa</option>
                                                <option value="AD" <?=$user['country'] == 'AD'? 'selected':'' ?> >Andorra</option>
                                                <option value="AO" <?=$user['country'] == 'AO'? 'selected':'' ?> >Angola</option>
                                                <option value="AI" <?=$user['country'] == 'AI'? 'selected':'' ?> >Anguilla</option>
                                                <option value="AQ" <?=$user['country'] == 'AQ'? 'selected':'' ?> >Antarctica</option>
                                                <option value="AG" <?=$user['country'] == 'AB'? 'selected':'' ?> >Antigua and Barbuda</option>
                                                <option value="AR" <?=$user['country'] == 'AR'? 'selected':'' ?> >Argentina</option>
                                                <option value="AM" <?=$user['country'] == 'AM'? 'selected':'' ?> >Armenia</option>
                                                <option value="AW" <?=$user['country'] == 'AW'? 'selected':'' ?> >Aruba</option>
                                                <option value="AU" <?=$user['country'] == 'AU'? 'selected':'' ?> >Australia</option>
                                                <option value="AT" <?=$user['country'] == 'AT'? 'selected':'' ?> >Austria</option>
                                                <option value="AZ" <?=$user['country'] == 'AZ'? 'selected':'' ?> >Azerbaijan</option>
                                                <option value="BS" <?=$user['country'] == 'BS'? 'selected':'' ?> >Bahamas</option>
                                                <option value="BH" <?=$user['country'] == 'BH'? 'selected':'' ?> >Bahrain</option>
                                                <option value="BD" <?=$user['country'] == 'BD'? 'selected':'' ?> >Bangladesh</option>
                                                <option value="BB" <?=$user['country'] == 'BB'? 'selected':'' ?> >Barbados</option>
                                                <option value="BY" <?=$user['country'] == 'BY'? 'selected':'' ?> >Belarus</option>
                                                <option value="BE" <?=$user['country'] == 'BE'? 'selected':'' ?> >Belgium</option>
                                                <option value="BZ" <?=$user['country'] == 'BZ'? 'selected':'' ?> >Belize</option>
                                                <option value="BJ" <?=$user['country'] == 'BJ'? 'selected':'' ?> >Benin</option>
                                                <option value="BM" <?=$user['country'] == 'BM'? 'selected':'' ?> >Bermuda</option>
                                                <option value="BT" <?=$user['country'] == 'BT'? 'selected':'' ?> >Bhutan</option>
                                                <option value="BO" <?=$user['country'] == 'BO'? 'selected':'' ?> >Bolivia</option>
                                                <option value="BQ" <?=$user['country'] == 'BQ'? 'selected':'' ?> >Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA" <?=$user['country'] == 'BA'? 'selected':'' ?> >Bosnia and Herzegovina</option>
                                                <option value="BW" <?=$user['country'] == 'BW'? 'selected':'' ?> >Botswana</option>
                                                <option value="BV" <?=$user['country'] == 'BV'? 'selected':'' ?> >Bouvet Island</option>
                                                <option value="BR" <?=$user['country'] == 'BR'? 'selected':'' ?> >Brazil</option>
                                                <option value="IO" <?=$user['country'] == 'IO'? 'selected':'' ?> >British Indian Ocean Territory</option>
                                                <option value="BN" <?=$user['country'] == 'BN'? 'selected':'' ?> >Brunei Darussalam</option>
                                                <option value="BG" <?=$user['country'] == 'BG'? 'selected':'' ?> >Bulgaria</option>
                                                <option value="BF" <?=$user['country'] == 'BF'? 'selected':'' ?> >Burkina Faso</option>
                                                <option value="BI" <?=$user['country'] == 'BI'? 'selected':'' ?> >Burundi</option>
                                                <option value="KH" <?=$user['country'] == 'KH'? 'selected':'' ?> >Cambodia</option>
                                                <option value="CM" <?=$user['country'] == 'CM'? 'selected':'' ?> >Cameroon</option>
                                                <option value="CA" <?=$user['country'] == 'CA'? 'selected':'' ?> >Canada</option>
                                                <option value="CV" <?=$user['country'] == 'CV'? 'selected':'' ?> >Cape Verde</option>
                                                <option value="KY" <?=$user['country'] == 'KY'? 'selected':'' ?> >Cayman Islands</option>
                                                <option value="CF" <?=$user['country'] == 'CF'? 'selected':'' ?> >Central African Republic</option>
                                                <option value="TD" <?=$user['country'] == 'TD'? 'selected':'' ?> >Chad</option>
                                                <option value="CL" <?=$user['country'] == 'CL'? 'selected':'' ?> >Chile</option>
                                                <option value="CN" <?=$user['country'] == 'CN'? 'selected':'' ?> >China</option>
                                                <option value="CX" <?=$user['country'] == 'CX'? 'selected':'' ?> >Christmas Island</option>
                                                <option value="CC" <?=$user['country'] == 'CC'? 'selected':'' ?> >Cocos (Keeling) Islands</option>
                                                <option value="CO" <?=$user['country'] == 'CO'? 'selected':'' ?> >Colombia</option>
                                                <option value="KM" <?=$user['country'] == 'KM'? 'selected':'' ?> >Comoros</option>
                                                <option value="CG" <?=$user['country'] == 'CG'? 'selected':'' ?> >Congo</option>
                                                <option value="CD" <?=$user['country'] == 'CD'? 'selected':'' ?> >Congo, Democratic Republic of the Congo</option>
                                                <option value="CK" <?=$user['country'] == 'CK'? 'selected':'' ?> >Cook Islands</option>
                                                <option value="CR" <?=$user['country'] == 'CR'? 'selected':'' ?> >Costa Rica</option>
                                                <option value="CI" <?=$user['country'] == 'CI'? 'selected':'' ?> >Cote D'Ivoire</option>
                                                <option value="HR" <?=$user['country'] == 'HR'? 'selected':'' ?> >Croatia</option>
                                                <option value="CU" <?=$user['country'] == 'CU'? 'selected':'' ?> >Cuba</option>
                                                <option value="CW" <?=$user['country'] == 'CW'? 'selected':'' ?> >Curacao</option>
                                                <option value="CY" <?=$user['country'] == 'CY'? 'selected':'' ?> >Cyprus</option>
                                                <option value="CZ" <?=$user['country'] == 'CZ'? 'selected':'' ?> >Czech Republic</option>
                                                <option value="DK" <?=$user['country'] == 'DK'? 'selected':'' ?> >Denmark</option>
                                                <option value="DJ" <?=$user['country'] == 'DJ'? 'selected':'' ?> >Djibouti</option>
                                                <option value="DM" <?=$user['country'] == 'DM'? 'selected':'' ?> >Dominica</option>
                                                <option value="DO" <?=$user['country'] == 'DO'? 'selected':'' ?> >Dominican Republic</option>
                                                <option value="EC" <?=$user['country'] == 'EC'? 'selected':'' ?> >Ecuador</option>
                                                <option value="EG" <?=$user['country'] == 'EG'? 'selected':'' ?> >Egypt</option>
                                                <option value="SV" <?=$user['country'] == 'SV'? 'selected':'' ?> >El Salvador</option>
                                                <option value="GQ" <?=$user['country'] == 'GQ'? 'selected':'' ?> >Equatorial Guinea</option>
                                                <option value="ER" <?=$user['country'] == 'ER'? 'selected':'' ?> >Eritrea</option>
                                                <option value="EE" <?=$user['country'] == 'EE'? 'selected':'' ?> >Estonia</option>
                                                <option value="ET" <?=$user['country'] == 'ET'? 'selected':'' ?> >Ethiopia</option>
                                                <option value="FK" <?=$user['country'] == 'FK'? 'selected':'' ?> >Falkland Islands (Malvinas)</option>
                                                <option value="FO" <?=$user['country'] == 'FO'? 'selected':'' ?> >Faroe Islands</option>
                                                <option value="FJ" <?=$user['country'] == 'FJ'? 'selected':'' ?> >Fiji</option>
                                                <option value="FI" <?=$user['country'] == 'FI'? 'selected':'' ?> >Finland</option>
                                                <option value="FR" <?=$user['country'] == 'FR'? 'selected':'' ?> >France</option>
                                                <option value="GF" <?=$user['country'] == 'GF'? 'selected':'' ?> >French Guiana</option>
                                                <option value="PF" <?=$user['country'] == 'PF'? 'selected':'' ?> >French Polynesia</option>
                                                <option value="TF" <?=$user['country'] == 'TF'? 'selected':'' ?> >French Southern Territories</option>
                                                <option value="GA" <?=$user['country'] == 'GA'? 'selected':'' ?> >Gabon</option>
                                                <option value="GM" <?=$user['country'] == 'GM'? 'selected':'' ?> >Gambia</option>
                                                <option value="GE" <?=$user['country'] == 'GE'? 'selected':'' ?> >Georgia</option>
                                                <option value="DE" <?=$user['country'] == 'DE'? 'selected':'' ?> >Germany</option>
                                                <option value="GH" <?=$user['country'] == 'GH'? 'selected':'' ?> >Ghana</option>
                                                <option value="GI" <?=$user['country'] == 'GI'? 'selected':'' ?> >Gibraltar</option>
                                                <option value="GR" <?=$user['country'] == 'GR'? 'selected':'' ?> >Greece</option>
                                                <option value="GL" <?=$user['country'] == 'GL'? 'selected':'' ?> >Greenland</option>
                                                <option value="GD" <?=$user['country'] == 'GD'? 'selected':'' ?> >Grenada</option>
                                                <option value="GP" <?=$user['country'] == 'GP'? 'selected':'' ?> >Guadeloupe</option>
                                                <option value="GU" <?=$user['country'] == 'GU'? 'selected':'' ?> >Guam</option>
                                                <option value="GT" <?=$user['country'] == 'GT'? 'selected':'' ?> >Guatemala</option>
                                                <option value="GG" <?=$user['country'] == 'GG'? 'selected':'' ?> >Guernsey</option>
                                                <option value="GN" <?=$user['country'] == 'GN'? 'selected':'' ?> >Guinea</option>
                                                <option value="GW" <?=$user['country'] == 'GW'? 'selected':'' ?> >Guinea-Bissau</option>
                                                <option value="GY" <?=$user['country'] == 'GY'? 'selected':'' ?> >Guyana</option>
                                                <option value="HT" <?=$user['country'] == 'HT'? 'selected':'' ?> >Haiti</option>
                                                <option value="HM" <?=$user['country'] == 'HM'? 'selected':'' ?> >Heard Island and Mcdonald Islands</option>
                                                <option value="VA" <?=$user['country'] == 'VA'? 'selected':'' ?> >Holy See (Vatican City State)</option>
                                                <option value="HN" <?=$user['country'] == 'HN'? 'selected':'' ?> >Honduras</option>
                                                <option value="HK" <?=$user['country'] == 'HK'? 'selected':'' ?> >Hong Kong</option>
                                                <option value="HU" <?=$user['country'] == 'HU'? 'selected':'' ?> >Hungary</option>
                                                <option value="IS" <?=$user['country'] == 'IS'? 'selected':'' ?> >Iceland</option>
                                                <option value="IN" <?=$user['country'] == 'IN'? 'selected':'' ?> >India</option>
                                                <option value="ID" <?=$user['country'] == 'ID'? 'selected':'' ?> >Indonesia</option>
                                                <option value="IR" <?=$user['country'] == 'IR'? 'selected':'' ?> >Iran, Islamic Republic of</option>
                                                <option value="IQ" <?=$user['country'] == 'IQ'? 'selected':'' ?> >Iraq</option>
                                                <option value="IE" <?=$user['country'] == 'IE'? 'selected':'' ?> >Ireland</option>
                                                <option value="IM" <?=$user['country'] == 'IM'? 'selected':'' ?> >Isle of Man</option>
                                                <option value="IL" <?=$user['country'] == 'IL'? 'selected':'' ?> >Israel</option>
                                                <option value="IT" <?=$user['country'] == 'IT'? 'selected':'' ?> >Italy</option>
                                                <option value="JM" <?=$user['country'] == 'JM'? 'selected':'' ?> >Jamaica</option>
                                                <option value="JP" <?=$user['country'] == 'JP'? 'selected':'' ?> >Japan</option>
                                                <option value="JE" <?=$user['country'] == 'JE'? 'selected':'' ?> >Jersey</option>
                                                <option value="JO" <?=$user['country'] == 'JO'? 'selected':'' ?> >Jordan</option>
                                                <option value="KZ" <?=$user['country'] == 'KZ'? 'selected':'' ?> >Kazakhstan</option>
                                                <option value="KE" <?=$user['country'] == 'KE'? 'selected':'' ?> >Kenya</option>
                                                <option value="KI" <?=$user['country'] == 'KI'? 'selected':'' ?> >Kiribati</option>
                                                <option value="KP" <?=$user['country'] == 'KP'? 'selected':'' ?> >Korea, Democratic People's Republic of</option>
                                                <option value="KR" <?=$user['country'] == 'KR'? 'selected':'' ?> >Korea, Republic of</option>
                                                <option value="XK" <?=$user['country'] == 'XK'? 'selected':'' ?> >Kosovo</option>
                                                <option value="KW" <?=$user['country'] == 'KW'? 'selected':'' ?> >Kuwait</option>
                                                <option value="KG" <?=$user['country'] == 'KG'? 'selected':'' ?> >Kyrgyzstan</option>
                                                <option value="LA" <?=$user['country'] == 'LA'? 'selected':'' ?> >Lao People's Democratic Republic</option>
                                                <option value="LV" <?=$user['country'] == 'LV'? 'selected':'' ?> >Latvia</option>
                                                <option value="LB" <?=$user['country'] == 'LB'? 'selected':'' ?> >Lebanon</option>
                                                <option value="LS" <?=$user['country'] == 'LS'? 'selected':'' ?> >Lesotho</option>
                                                <option value="LR" <?=$user['country'] == 'LR'? 'selected':'' ?> >Liberia</option>
                                                <option value="LY" <?=$user['country'] == 'LY'? 'selected':'' ?> >Libyan Arab Jamahiriya</option>
                                                <option value="LI" <?=$user['country'] == 'LI'? 'selected':'' ?> >Liechtenstein</option>
                                                <option value="LT" <?=$user['country'] == 'LT'? 'selected':'' ?> >Lithuania</option>
                                                <option value="LU" <?=$user['country'] == 'LU'? 'selected':'' ?> >Luxembourg</option>
                                                <option value="MO" <?=$user['country'] == 'MO'? 'selected':'' ?> >Macao</option>
                                                <option value="MK" <?=$user['country'] == 'MK'? 'selected':'' ?> >Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="MG" <?=$user['country'] == 'MG'? 'selected':'' ?> >Madagascar</option>
                                                <option value="MW" <?=$user['country'] == 'MW'? 'selected':'' ?> >Malawi</option>
                                                <option value="MY" <?=$user['country'] == 'MY'? 'selected':'' ?> >Malaysia</option>
                                                <option value="MV" <?=$user['country'] == 'MV'? 'selected':'' ?> >Maldives</option>
                                                <option value="ML" <?=$user['country'] == 'ML'? 'selected':'' ?> >Mali</option>
                                                <option value="MT" <?=$user['country'] == 'MT'? 'selected':'' ?> >Malta</option>
                                                <option value="MH" <?=$user['country'] == 'MH'? 'selected':'' ?> >Marshall Islands</option>
                                                <option value="MQ" <?=$user['country'] == 'MQ'? 'selected':'' ?> >Martinique</option>
                                                <option value="MR" <?=$user['country'] == 'MR'? 'selected':'' ?> >Mauritania</option>
                                                <option value="MU" <?=$user['country'] == 'MU'? 'selected':'' ?> >Mauritius</option>
                                                <option value="YT" <?=$user['country'] == 'YT'? 'selected':'' ?> >Mayotte</option>
                                                <option value="MX" <?=$user['country'] == 'MX'? 'selected':'' ?> >Mexico</option>
                                                <option value="FM" <?=$user['country'] == 'FM'? 'selected':'' ?> >Micronesia, Federated States of</option>
                                                <option value="MD" <?=$user['country'] == 'MD'? 'selected':'' ?> >Moldova, Republic of</option>
                                                <option value="MC" <?=$user['country'] == 'MC'? 'selected':'' ?> >Monaco</option>
                                                <option value="MN" <?=$user['country'] == 'MN'? 'selected':'' ?> >Mongolia</option>
                                                <option value="ME" <?=$user['country'] == 'ME'? 'selected':'' ?> >Montenegro</option>
                                                <option value="MS" <?=$user['country'] == 'MS'? 'selected':'' ?> >Montserrat</option>
                                                <option value="MA" <?=$user['country'] == 'MA'? 'selected':'' ?> >Morocco</option>
                                                <option value="MZ" <?=$user['country'] == 'MZ'? 'selected':'' ?> >Mozambique</option>
                                                <option value="MM" <?=$user['country'] == 'MM'? 'selected':'' ?> >Myanmar</option>
                                                <option value="NA" <?=$user['country'] == 'NA'? 'selected':'' ?> >Namibia</option>
                                                <option value="NR" <?=$user['country'] == 'NR'? 'selected':'' ?> >Nauru</option>
                                                <option value="NP" <?=$user['country'] == 'NP'? 'selected':'' ?> >Nepal</option>
                                                <option value="NL" <?=$user['country'] == 'NL'? 'selected':'' ?> >Netherlands</option>
                                                <option value="AN" <?=$user['country'] == 'AN'? 'selected':'' ?> >Netherlands Antilles</option>
                                                <option value="NC" <?=$user['country'] == 'NC'? 'selected':'' ?> >New Caledonia</option>
                                                <option value="NZ" <?=$user['country'] == 'NZ'? 'selected':'' ?> >New Zealand</option>
                                                <option value="NI" <?=$user['country'] == 'NI'? 'selected':'' ?> >Nicaragua</option>
                                                <option value="NE" <?=$user['country'] == 'NE'? 'selected':'' ?> >Niger</option>
                                                <option value="NG" <?=$user['country'] == 'NG'? 'selected':'' ?> >Nigeria</option>
                                                <option value="NU" <?=$user['country'] == 'NU'? 'selected':'' ?> >Niue</option>
                                                <option value="NF" <?=$user['country'] == 'NF'? 'selected':'' ?> >Norfolk Island</option>
                                                <option value="MP" <?=$user['country'] == 'MP'? 'selected':'' ?> >Northern Mariana Islands</option>
                                                <option value="NO" <?=$user['country'] == 'NO'? 'selected':'' ?> >Norway</option>
                                                <option value="OM" <?=$user['country'] == 'OM'? 'selected':'' ?> >Oman</option>
                                                <option value="PK" <?=$user['country'] == 'PK'? 'selected':'' ?> >Pakistan</option>
                                                <option value="PW" <?=$user['country'] == 'PW'? 'selected':'' ?> >Palau</option>
                                                <option value="PS" <?=$user['country'] == 'PS'? 'selected':'' ?> >Palestinian Territory, Occupied</option>
                                                <option value="PA" <?=$user['country'] == 'PA'? 'selected':'' ?> >Panama</option>
                                                <option value="PG" <?=$user['country'] == 'PG'? 'selected':'' ?> >Papua New Guinea</option>
                                                <option value="PY" <?=$user['country'] == 'PY'? 'selected':'' ?> >Paraguay</option>
                                                <option value="PE" <?=$user['country'] == 'PE'? 'selected':'' ?> >Peru</option>
                                                <option value="PH" <?=$user['country'] == 'PH'? 'selected':'' ?> >Philippines</option>
                                                <option value="PN" <?=$user['country'] == 'PN'? 'selected':'' ?> >Pitcairn</option>
                                                <option value="PL" <?=$user['country'] == 'PL'? 'selected':'' ?> >Poland</option>
                                                <option value="PT" <?=$user['country'] == 'PT'? 'selected':'' ?> >Portugal</option>
                                                <option value="PR" <?=$user['country'] == 'PR'? 'selected':'' ?> >Puerto Rico</option>
                                                <option value="QA" <?=$user['country'] == 'QA'? 'selected':'' ?> >Qatar</option>
                                                <option value="RE" <?=$user['country'] == 'RE'? 'selected':'' ?> >Reunion</option>
                                                <option value="RO" <?=$user['country'] == 'RO'? 'selected':'' ?> >Romania</option>
                                                <option value="RU" <?=$user['country'] == 'RU'? 'selected':'' ?> >Russian Federation</option>
                                                <option value="RW" <?=$user['country'] == 'RW'? 'selected':'' ?> >Rwanda</option>
                                                <option value="BL" <?=$user['country'] == 'BL'? 'selected':'' ?> >Saint Barthelemy</option>
                                                <option value="SH" <?=$user['country'] == 'SH'? 'selected':'' ?> >Saint Helena</option>
                                                <option value="KN" <?=$user['country'] == 'KN'? 'selected':'' ?> >Saint Kitts and Nevis</option>
                                                <option value="LC" <?=$user['country'] == 'LC'? 'selected':'' ?> >Saint Lucia</option>
                                                <option value="MF" <?=$user['country'] == 'MF'? 'selected':'' ?> >Saint Martin</option>
                                                <option value="PM" <?=$user['country'] == 'PM'? 'selected':'' ?> >Saint Pierre and Miquelon</option>
                                                <option value="VC" <?=$user['country'] == 'VC'? 'selected':'' ?> >Saint Vincent and the Grenadines</option>
                                                <option value="WS" <?=$user['country'] == 'WS'? 'selected':'' ?> >Samoa</option>
                                                <option value="SM" <?=$user['country'] == 'SM'? 'selected':'' ?> >San Marino</option>
                                                <option value="ST" <?=$user['country'] == 'ST'? 'selected':'' ?> >Sao Tome and Principe</option>
                                                <option value="SA" <?=$user['country'] == 'SA'? 'selected':'' ?> >Saudi Arabia</option>
                                                <option value="SN" <?=$user['country'] == 'SN'? 'selected':'' ?> >Senegal</option>
                                                <option value="RS" <?=$user['country'] == 'RS'? 'selected':'' ?> >Serbia</option>
                                                <option value="CS" <?=$user['country'] == 'CS'? 'selected':'' ?> >Serbia and Montenegro</option>
                                                <option value="SC" <?=$user['country'] == 'SC'? 'selected':'' ?> >Seychelles</option>
                                                <option value="SL" <?=$user['country'] == 'SL'? 'selected':'' ?> >Sierra Leone</option>
                                                <option value="SG" <?=$user['country'] == 'SG'? 'selected':'' ?> >Singapore</option>
                                                <option value="SX" <?=$user['country'] == 'SX'? 'selected':'' ?> >Sint Maarten</option>
                                                <option value="SK" <?=$user['country'] == 'SK'? 'selected':'' ?> >Slovakia</option>
                                                <option value="SI" <?=$user['country'] == 'SI'? 'selected':'' ?> >Slovenia</option>
                                                <option value="SB" <?=$user['country'] == 'SB'? 'selected':'' ?> >Solomon Islands</option>
                                                <option value="SO" <?=$user['country'] == 'SO'? 'selected':'' ?> >Somalia</option>
                                                <option value="ZA" <?=$user['country'] == 'ZA'? 'selected':'' ?> >South Africa</option>
                                                <option value="GS" <?=$user['country'] == 'GS'? 'selected':'' ?> >South Georgia and the South Sandwich Islands</option>
                                                <option value="SS" <?=$user['country'] == 'SS'? 'selected':'' ?> >South Sudan</option>
                                                <option value="ES" <?=$user['country'] == 'ES'? 'selected':'' ?> >Spain</option>
                                                <option value="LK" <?=$user['country'] == 'LK'? 'selected':'' ?> >Sri Lanka</option>
                                                <option value="SD" <?=$user['country'] == 'SD'? 'selected':'' ?> >Sudan</option>
                                                <option value="SR" <?=$user['country'] == 'SR'? 'selected':'' ?> >Suriname</option>
                                                <option value="SJ" <?=$user['country'] == 'SJ'? 'selected':'' ?> >Svalbard and Jan Mayen</option>
                                                <option value="SZ" <?=$user['country'] == 'SZ'? 'selected':'' ?> >Swaziland</option>
                                                <option value="SE" <?=$user['country'] == 'SE'? 'selected':'' ?> >Sweden</option>
                                                <option value="CH" <?=$user['country'] == 'CH'? 'selected':'' ?> >Switzerland</option>
                                                <option value="SY" <?=$user['country'] == 'SY'? 'selected':'' ?> >Syrian Arab Republic</option>
                                                <option value="TW" <?=$user['country'] == 'TW'? 'selected':'' ?> >Taiwan, Province of China</option>
                                                <option value="TJ" <?=$user['country'] == 'TJ'? 'selected':'' ?> >Tajikistan</option>
                                                <option value="TZ" <?=$user['country'] == 'TZ'? 'selected':'' ?> >Tanzania, United Republic of</option>
                                                <option value="TH" <?=$user['country'] == 'TH'? 'selected':'' ?> >Thailand</option>
                                                <option value="TL" <?=$user['country'] == 'TL'? 'selected':'' ?> >Timor-Leste</option>
                                                <option value="TG" <?=$user['country'] == 'TG'? 'selected':'' ?> >Togo</option>
                                                <option value="TK" <?=$user['country'] == 'TK'? 'selected':'' ?> >Tokelau</option>
                                                <option value="TO" <?=$user['country'] == 'TO'? 'selected':'' ?> >Tonga</option>
                                                <option value="TT" <?=$user['country'] == 'TT'? 'selected':'' ?> >Trinidad and Tobago</option>
                                                <option value="TN" <?=$user['country'] == 'TN'? 'selected':'' ?> >Tunisia</option>
                                                <option value="TR" <?=$user['country'] == 'TR'? 'selected':'' ?> >Turkey</option>
                                                <option value="TM" <?=$user['country'] == 'TM'? 'selected':'' ?> >Turkmenistan</option>
                                                <option value="TC" <?=$user['country'] == 'TC'? 'selected':'' ?> >Turks and Caicos Islands</option>
                                                <option value="TV" <?=$user['country'] == 'TV'? 'selected':'' ?> >Tuvalu</option>
                                                <option value="UG" <?=$user['country'] == 'UG'? 'selected':'' ?> >Uganda</option>
                                                <option value="UA" <?=$user['country'] == 'UA'? 'selected':'' ?> >Ukraine</option>
                                                <option value="AE" <?=$user['country'] == 'AE'? 'selected':'' ?> >United Arab Emirates</option>
                                                <option value="GB" <?=$user['country'] == 'GB'? 'selected':'' ?> >United Kingdom</option>
                                                <option value="US" <?=$user['country'] == 'US'? 'selected':'' ?> >United States</option>
                                                <option value="UM" <?=$user['country'] == 'UM'? 'selected':'' ?> >United States Minor Outlying Islands</option>
                                                <option value="UY" <?=$user['country'] == 'UY'? 'selected':'' ?> >Uruguay</option>
                                                <option value="UZ" <?=$user['country'] == 'UZ'? 'selected':'' ?> >Uzbekistan</option>
                                                <option value="VU" <?=$user['country'] == 'VU'? 'selected':'' ?> >Vanuatu</option>
                                                <option value="VE" <?=$user['country'] == 'VE'? 'selected':'' ?> >Venezuela</option>
                                                <option value="VN" <?=$user['country'] == 'VN'? 'selected':'' ?> >Viet Nam</option>
                                                <option value="VG" <?=$user['country'] == 'VG'? 'selected':'' ?> >Virgin Islands, British</option>
                                                <option value="VI" <?=$user['country'] == 'VI'? 'selected':'' ?> >Virgin Islands, U.S.A</option>
                                                <option value="WF" <?=$user['country'] == 'WF'? 'selected':'' ?> >Wallis and Futuna</option>
                                                <option value="EH" <?=$user['country'] == 'EH'? 'selected':'' ?> >Western Sahara</option>
                                                <option value="YE" <?=$user['country'] == 'YE'? 'selected':'' ?> >Yemen</option>
                                                <option value="ZM" <?=$user['country'] == 'ZM'? 'selected':'' ?> >Zambia</option>
                                                <option value="ZW" <?=$user['country'] == 'ZW'? 'selected':'' ?> >Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Role</label>
                                            <select id="level" name="level" class="form-control">
                                                <option>Please Select Access Level</option>
                                                <option value="admin" <?=$user['level'] == 'admin'? 'selected':'' ?> >Admin</option>
                                                <option value="user" <?=$user['level'] == 'user'? 'selected':'' ?> >User</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" <?=$user['status'] == '1'? 'checked':''?> width="100px" height="100px"/>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_user" class="btn btn-primary">Update Details</button>
                                        </div>
                                    </div>
                                </form>
    
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <h4>No Record Found</h4>
                                <?php
                            }

                        }
                            

                        ?>

                    </div>
                </div>
            </div>
        </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>