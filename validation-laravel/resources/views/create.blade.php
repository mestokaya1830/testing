<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .container {
            width: 600px;
            margin: 50px auto;
        }

        .title {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        form .reg_inp {
            margin: 5px 0;
            min-height: 30px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding-left: 5px;
        }

        form .info,
        .error {
            font-size: 12px;
            color: #ccc;
            padding-left: 10px;
        }

        form .error {
            color: red;
        }

        .gender label {
            cursor: pointer;
        }

        #aggre {
            margin: 20px 0;
            margin-left: 5px;
        }

        textarea {
            resize: vertical;
            margin: 10px 0;
            padding: 10px;
        }

        h3 {
            color: #999;
        }

        .children {
            display: none;
        }

    </style>
</head>

<body class="antialiased">
    <div class="container">
        <h2 class="title">Kayıt</h2>
        @if ($errors->any)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger m-1" role="alert">{{ $error }}</div>
            @endforeach
        @endif
        <form id="form" action="{{ route('store') }}" method="POST" enctype="multipart/form-data" accept="image/*">
            @csrf
            <!-- name -->
            <input class="reg_inp" type="text" name="name" title="Ad" placeholder="Ad" minlength="2"
                maxlength="50" value="{{ old('name') }}" />
            <!-- lastname -->
            <input class="reg_inp" type="text" name="lastname" title="Soyad" placeholder="Soyad" required
                minlength="2" maxlength="50" value="{{ old('lastname') }}" />
            <!-- email -->
            <input class="reg_inp" type="email" name="email" title="Mail Adresi" placeholder="Mail Adresi"
                required minlength="10" maxlength="100" value="{{ old('email') }}" />
            <!-- password -->
            <small class="info">Sifre en az 6 karakter olmalidir</small>
            <input id="password" class="reg_inp" type="text" name="password" title="Şifre" placeholder="Şifre"
                required minlength="6" maxlength="100" />
            <!-- password_confirmation -->
            <input id="password_confirmation" class="reg_inp" type="text" name="password_confirmation"
                title="Şifre Tekrar" placeholder="Şifre Tekrar" required minlength="6" maxlength="50" />
            <span class="error" id="password_error"></span>
            <!-- phone -->
            <input class="reg_inp" type="text" placeholder="Telefon" title="Telefon" name="phone" required
                minlength="10" maxlength="10" pattern="[0-9]+"
                oninvalid="this.setCustomValidity('Telefon başında sıfır olmadan 10 haneli rakam olarak girilmelidir!')"
                oninput="setCustomValidity('')" value="{{ old('phone') }}" />
            <span class="info">Telefon başinda sıfır olmadan 10 haneli rakam olarak
                girilmelidir:Örnek 5552333332</span>

            <input type="tel" id="phone_format" name="phone_format" class="reg_inp" pattern="[0]{1}-[0-9]{3}-[0-9]{3}-[0-9]{4}"
                placeholder="Telefon Formatli" value="{{ old('phone_format') }}" required />
            <small class="info">Telefon başinda sıfır ile birlikte 11 haneli rakam olarak
                girilmelidir:Örnek 0-000-000-0000</small>
            <!-- birthday -->
            <h3>Dogum Tarihi</h3>
            <input class="reg_inp" id="birthdate" type="date" name="birthdate" placeholder="Doğum Tarihi"
                title="Doğum Tarihi" required min="1900-01-01" max="2000-01-01" title="Dogum Tarihi"
                value="{{ old('birthdate') }}" />
                <small class="info">Yasiniz 18 veye uzeri olmalidir</small>
            <!-- salary -->
            <span class="error" id="birthdate_error"></span>
            <input class="reg_inp" id="salary" type="number" name="salary" placeholder="Maaş" title="Maaş"
                required min="0" max="30000" value="{{ old('salary') }}" />
            <input class="reg_inp" id="age" type="number" name="age" placeholder="Yas" title="Yas" required
                min="18" max="120" value="{{ old('age') }}" />
                <small class="info">Yasiniz 18 veye uzeri olmalidir</small>
            <!-- gender -->
            <span class="error" id="age_error"></span>
            <h3>Cinsiyeti</h3>
            <div class="gender">
                <label for="male"><input type="radio" name="gender" id="male" required
                        @if (old('gender') === 'Erkek') checked @endif />
                    Erkek</label>
                <label for="female">
                    <input type="radio" name="gender" id="female" required
                        @if (old('gender') === 'Kadın') checked @endif />
                    Kadın</label>
            </div>
            <!-- married -->
            <h3>Medeni Durumu</h3>
            <div class="gender">
                <label for="married"><input type="radio" name="marital_status" id="married" required
                        @if (old('marital_status') == 'Evli') checked @endif />
                    Evli</label>
                <label for="single">
                    <input type="radio" name="marital_status" id="single" required
                        @if (old('marital_status') == 'Bekar') checked @endif />
                    Bekar</label>
            </div>
            <br />
            <!-- children -->
            <select name="children" id="children" class="reg_inp children" required>
                <option @if (old('children') === '0') selected @endif value="0">Yok</option>
                <option @if (old('children') === '1') selected @endif value="1">1</option>
                <option @if (old('children') === '2') selected @endif value="2">2</option>
                <option @if (old('children') === '3') selected @endif value="3">3</option>
                <option @if (old('children') === '4') selected @endif value="4">4</option>
                <option @if (old('children') === '5') selected @endif value="5">5</option>
                <option @if (old('children') === '6') selected @endif value="6">6</option>
            </select>
            <!-- lang -->
            <h3>Alacağı Dersler</h3>
            <div class="lang">
                <label for="html">
                    <input type="checkbox" name="langs[]" id="html" value="Html" class="lang"
                        @if (is_array(old('langs')) && in_array('Html', old('langs'))) checked @endif />
                    Html</label>
                <label for="css"><input type="checkbox" name="langs[]" id="css" value="Css" class="lang"
                        @if (is_array(old('langs')) && in_array('Css', old('langs'))) checked @endif />
                    Css</label>
                <label for="javascript"><input type="checkbox" name="langs[]" value="Javascript" id="javascript"
                        @if (is_array(old('langs')) && in_array('Javascript', old('langs'))) checked @endif class="lang" />
                    Javascript</label>
                <label for="nodejs"><input type="checkbox" name="langs[]" id="nodejs" value="NodeJs"
                        @if (is_array(old('langs')) && in_array('Nodejs', old('langs'))) checked @endif class="lang" />
                    NodeJs</label>
                <label for="nuxt"><input type="checkbox" name="langs[]" id="nuxt" value="Nuxt" class="lang"
                        @if (is_array(old('langs')) && in_array('Nuxt', old('langs'))) checked @endif />
                    Nuxt</label>
                <label for="svelte"><input type="checkbox" name="langs[]" id="svelte" value="Svelte"
                        @if (is_array(old('langs')) && in_array('Svelte', old('langs'))) checked @endif class="lang" />
                    Svelte</label>
            </div>
            <span class="error" id="lang_error"></span>
            <h3>Kurs Donemi</h3>
            <!-- started -->
            <span class="info">Baslama Tarihi</span>
            <input class="reg_inp" id="start" type="datetime-local" name="start" placeholder="Start" title="Start" min=""
                required value="{{ old('start') }}" />
            <span class="error" id="start_error"></span>
            <!-- finish -->
            <span class="info">Bitis Tarihi</span>
            <input class="reg_inp" id="finish" type="datetime-local" name="finish" placeholder="Finish" title="Finish"
                required value="{{ old('finish') }}" />
            <span class="error" id="finish_error"></span>
            <!-- address -->
            <textarea name="address" id="address" cols="30" rows="5" minlength="20" maxlength="255" placeholder="Adres"
                required>{{ old('address') }}</textarea>
                <small class="info">Address en fazla 255 karekter olabilir</small>
            <!-- declaretion -->
            <textarea name="declaretion" id="declaretion" cols="30" rows="10" minlength="30" maxlength="500" placeholder="Açıklama"
                required>{{ old('declaretion') }}</textarea>
                <small class="info">Icerik en fazla 500 karekter olabilir</small>
            <input type="file" name="image" id="image" style="margin: 10px 0;" required>
            <small class="info">Resim boyutu en fazla 1MB olabilir</small>
            <span class="error" id="image_error"></span>
            <!-- aggre -->
            <label for="aggre"><input type="checkbox" name="aggre" id="aggre" /> Okudum</label>
            <input type="submit" value="Kayit" id="submit" disabled />
        </form>
    </div>
    <script>
        const inp = (param) => document.getElementById(param)
        //aggre function
        inp("aggre").addEventListener("change", () => {
            if (inp("submit").disabled) {
                inp("submit").disabled = false;
            } else {
                inp("submit").disabled = true;
            }
        });
        //password function
        const checkPassword = (e) => {
            if (
                inp("password").value !==
                inp("password_confirmation").value
            ) {
                e.preventDefault();
                inp("password_error").innerText = "Şifreler Uyuşmuyor!";
                inp("password_confirmation").focus();
            } else {
                inp("password_error").innerText = null;
            }
        };
        //lang function
        const checkLang = (e) => {
            let checkedLength = 0;
            document.querySelectorAll(".lang").forEach((item) => {
                item.checked ? checkedLength++ : 0;
            });
            if (checkedLength < 3) {
                e.preventDefault();
                inp("lang_error").innerText = "En az 3 dilin seçili olması gerekiyor!";
                inp("html").focus();
            } else {
                inp("lang_error").innerText = null;
            }
        };
        //married eventlistener
        inp("married").onchange = (e) =>
            e.target.checked ?
            inp("children").classList.remove("children") :
            null;

        inp("single").onchange = (e) =>
            e.target.checked ?
            inp("children").classList.add("children") :
            null;
        inp("finish").onchange = (e) => checkDate(e);

        //course function
        const checkDate = (e) => {
            if (inp("start").value > inp("finish").value) {
                e.preventDefault();
                inp("start_error").innerText = "Bitiş tarihi başlama tarihinden küçük olamaz!";
            } else {
                inp("start_error").innerText = "";
            }
        };

        //check image
        const checkImage = (e) => {
            const fileSize = inp("image").files[0]
            console.log(fileSize.size)
            if (fileSize.size > 536870) //500 kb
            {
                inp("image_error").innerText = "Dosya boyutu 1MB'dan büyük olmamalı!";
                e.preventDefault()
            } else {
                inp("image_error").innerText = ''
            }
        }

        const checkAgeValue = (e) => {
            if (inp("age").value < 0) {
                inp("age_error").innerText = "Bu alan 0 veya uzeri olmali!";
                e.preventDefault();
            } else {
                inp("age_error").innerText = "";
            }
        };

        checkBirthDate = (e) => {
            let today = new Date();
            let nowyear = today.getFullYear();
            let nowmonth = today.getMonth();
            let nowday = today.getDate();
            let birth = new Date(inp("birthdate").value);

            let birthyear = birth.getFullYear();
            let birthmonth = birth.getMonth();
            let birthday = birth.getDate();

            let age = nowyear - birthyear;
            let age_month = nowmonth - birthmonth;
            let age_day = nowday - birthday;

            inp("birthdate_error").innerText = "";
            if (age_month < 0 || (age_month == 0 && age_day < 0)) {
                age = parseInt(age) - 1;
            }
            if ((age == 18 && age_month <= 0 && age_day <= 0) || age < 18) {
                e.preventDefault();
                inp("birthdate_error").innerText = "Yasiniz 18 ve uzeri olmali!";
                inp("birthdate").focus();
            }
        };

        const checkAfterNow = (e) => {
            let today = Date.now();
            let start = new Date(inp("start").value).getTime();

            if (
                start.toString().substring(0, 8) < today.toString().substring(0, 8)
            ) {
                e.preventDefault();
                inp("start_error").innerText =
                    "Başlama tarihi suan dan küçük olamaz!";
            } else {
                inp("start_error").innerText = "";
            }
        };

        //submit
        inp("form").onsubmit = (e) => {
            e.preventDefault()
            checkPassword(e);
            checkLang(e);
            checkDate(e);
            checkImage(e);
            checkBirthDate(e);
            checkAfterNow(e);
            checkAgeValue(e);
        };
    </script>
</body>

</html>
