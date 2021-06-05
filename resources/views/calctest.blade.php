@extends('layouts.layout')
@section('calctest')

    <script type="text/javascript">
        fr_1 = ["/img/fram_1_ot.jpg", "/img/fram_1.jpg"];
        fr_2 = ["/img/fram_2_ot.jpg", "/img/fram_2.jpg"];
        fr_3 = ["/img/fram_3_ot.jpg", "/img/fram_3.jpg"];
        okna = ["/img/stv_pv.jpg", "/img/stv_po.jpg", "/img/stv_gl.jpg"];
        okna2 = ["/img/stv_pv_l.jpg", "/img/stv_po_l.jpg", "/img/stv_gl.jpg"];
        door = ["/img/dr_po.jpg", "/img/dr_pv.jpg"];
        door = ["/img/dr_po.jpg", "/img/dr_pv.jpg"];
        gl = ["/img/fram_1_sp.jpg", "/img/fram_1.jpg"];
        w1 = {src: "/img/stv_gl.jpg", w1_img: 0};
        w2 = {src: "/img/stv_gl.jpg", w2_img: 0};
        w3 = {src: "/img/stv_gl.jpg", w2_img: 0};
        dr = {src: "/img/dr_pv.jpg", dr_img: 0};
        f1 = {src: "/img/fram_1.jpg", fr1_img: 0};
        f2 = {src: "/img/fram_2.jpg", fr2_img: 0};
        f3 = {src: "/img/fram_3.jpg", fr3_img: 0};
        n1 = {src: "/img/fram_1.jpg", n1_img: 0};
        n2 = {src: "/img/fram_1.jpg", n2_img: 0};
        n3 = {src: "/img/fram_1.jpg", n3_img: 0};
        n3_img = n2_img = n1_img = fr3_img = fr2_img = fr1_img = dr_img = w3_img = w2_img = w1_img = 0;
        type = 3;
        total_dost = total_count = total_price = nom_zap = 0;
        dop_info = "";
        let c=0;


        function changeText() {
            checkout = pole.innerHTML;
        }

        function sbros() {
            w1.src = "/img/stv_gl.jpg"
            w1.w1_img = 0;
            w2.src = "/img/stv_gl.jpg";
            w2.w2_img = 0;
            w3.src = "/img/stv_gl.jpg";
            w3.w3_img = 0;
            dr.src = "/img/dr_pv.jpg";
            dr.dr_img = 0;
            f1.src = "/img/fram_1.jpg";
            f1.fr1_img = 0;
            f2.src = "/img/fram_2.jpg";
            f2.fr2_img = 0;
            f3.src = "/img/fram_3.jpg";
            f3.fr3_img = 0;
            n1.src = "/img/fram_1.jpg";
            n1.n1_img = 0;
            n2.src = "/img/fram_1.jpg";
            n2.n2_img = 0;
            n3.src = "/img/fram_1.jpg";
            n3.n3_img = 0;
            fr_height.value = 600;
            fr_height2.value = 600;
            dr_height.value = 2100;
            win_height.value = 1500;
            gl_height.value = 500;
            win_1_width.value = 700;
            win_2_width.value = 700;
            win_3_width.value = 700;
            dr_width.value = 750;
            gl_1_width.value = 900;
            gl_2_width.value = 900;
            gl_3_width.value = 900;
            var a = [fr_height, fr_height2, dr_height, win_height, gl_height, win_1_width, win_2_width, win_3_width, dr_width, gl_1_width];
            for (i = 0; i < a.length; i++) a[i].style.color = "#707070";
            new_price.innerHTML = "\u0426\u0435\u043D\u0430";
            count.value = 1;
            opredelenie();
            pole_info.innerHTML = 'Нажмите кнопку "Рассчитать"';
            cv = 1
        }

        function upload() {
            sbros();
            opredelenie();
            win_div_1.style.display = "none";
            win_div_2.style.display = "none";
            win_div_3.style.display = "none";
            dr_div_1.style.display = "none";
            fr_div_1.style.display = "none";
            fr_div_2.style.display = "none";
            fr_div_3.style.display = "none";
            gl_div_1.style.display = "none";
            gl_div_2.style.display = "none";
            gl_div_3.style.display = "none";
            fr_div_h.style.display = "none";
            dr_div_h.style.display = "none";
            win_div_h.style.display = "none";
            gl_div_h.style.display = "none";
            win_1_div_w.style.display = "none";
            win_2_div_w.style.display = "none";
            win_3_div_w.style.display = "none";
            dr_div_w.style.display = "none";
            gl_1_div_w.style.display = "none";
            gl_2_div_w.style.display = "none";
            gl_3_div_w.style.display = "none";
            fr_div_h_l.style.display = "none";
            1 === type && (win_div_1.style.display = "block", win_div_h.style.display = "block", win_1_div_w.style.display = "block");
            2 === type && (win_div_1.style.display = "block", win_div_2.style.display = "block", win_div_h.style.display = "block", win_1_div_w.style.display = "block", win_2_div_w.style.display = "block");
            3 === type && (win_div_1.style.display = "block", win_div_2.style.display = "block", win_div_3.style.display = "block", win_div_h.style.display = "block", win_1_div_w.style.display = "block", win_2_div_w.style.display = "block", win_3_div_w.style.display = "block");
            4 === type && (dr_div_1.style.display = "block", win_div_2.style.display = "block", dr_div_h.style.display = "block", win_div_h.style.display = "block", win_2_div_w.style.display = "block", dr_div_w.style.display = "block");
            5 === type && (dr_div_1.style.display = "block", win_div_2.style.display = "block", win_div_3.style.display = "block", dr_div_h.style.display = "block", win_div_h.style.display = "block", win_2_div_w.style.display = "block", win_3_div_w.style.display = "block", dr_div_w.style.display = "block");
            6 === type && (win_div_1.style.display = "block", fr_div_1.style.display = "block", win_div_h.style.display = "block", fr_div_h.style.display = "block", win_1_div_w.style.display = "block");
            7 === type && (win_div_1.style.display = "block", win_div_2.style.display = "block", fr_div_2.style.display = "block", win_div_h.style.display = "block", fr_div_h.style.display = "block", win_1_div_w.style.display = "block", win_2_div_w.style.display = "block");
            8 === type && (win_div_1.style.display = "block", win_div_2.style.display = "block", win_div_3.style.display = "block", fr_div_3.style.display = "block", win_div_h.style.display = "block", fr_div_h.style.display = "block", win_1_div_w.style.display = "block", win_2_div_w.style.display = "block", win_3_div_w.style.display = "block");
            9 === type && (win_div_1.style.display = "block", gl_div_1.style.display = "block", win_div_h.style.display = "block", gl_div_h.style.display = "block", gl_1_div_w.style.display = "block");
            10 === type && (dr_div_1.style.display = "block", dr_div_h.style.display = "block", dr_div_w.style.display = "block");
            11 === type && (win_div_1.style.display = "block", gl_div_1.style.display = "block", fr_div_1.style.display = "block", win_div_h.style.display = "block", fr_div_h.style.display = "block", gl_div_h.style.display = "block", gl_1_div_w.style.display = "block");
            12 === type && (dr_div_1.style.display = "block", dr_div_h.style.display = "block", dr_div_w.style.display = "block", fr_div_1.style.display = "block", fr_div_h_l.style.display = "block");
        }

        function smena_img(a, b) {

            switch (b) {
                case 0:
                    if (0 == a) {
                        w1.src = okna[w1.w1_img];
                        document.querySelector('#w1').src = okna[w1.w1_img];
                        w1.w1_img < okna.length - 1 ? w1.w1_img++ : w1.w1_img = 0;

                    }
                    break;
                case 1:
                    if (1 == a) {
                        w2.src = okna2[w2.w2_img];
                        document.querySelector('#w2').src = okna[w2.w2_img];
                        w2.w2_img < okna2.length - 1 ? w2.w2_img++ : w2.w2_img = 0
                    }
                    break;
                case 2:
                    if (2 == a) {
                        w3.src = okna2[w3.w3_img];
                        document.querySelector('#w3').src = okna[w3.w3_img];
                        w3.w3_img < okna2.length - 1 ? w3.w3_img++ : w3.w3_img = 0
                    }
                    break;
                case 3:
                    if (3 == a) {
                        dr.src = door[dr.dr_img];
                        document.querySelector('#dr').src = door[dr.dr_img];
                        dr.dr_img < door.length - 1 ? dr.dr_img++ : dr.dr_img = 0
                    }
                    break;
                case 4:
                    if (4 == a) {
                        f1.src = fr_1[fr1.fr1_img];
                        document.querySelector('#fr1').src = fr_1[f1.fr1_img];
                        f1.fr1_img < fr_1.length - 1 ? f1.fr1_img++ : f1.fr1_img = 0
                    }
                    break;
                case 5:
                    if (5 == a) {
                        f2.src = fr_2[fr2.fr2_img];
                        document.querySelector('#fr2').src = fr_2[f2.fr2_img];
                        f2.fr2_img < fr_2.length - 1 ? f2.fr2_img++ : f2.fr2_img = 0
                    }
                    break;
                case 6:
                    if (6 == a) {
                        f3.src = fr_3[fr3_img];
                        document.querySelector('#fr3').src = fr_3[f2.fr3_img];
                        f3.fr3_img < fr_3.length - 1 ? f3.fr3_img++ : f3.fr3_img = 0
                    }
                    break;
                case 7:
                    if (7 == a) {
                        n1.src = gl[n1_img];
                        document.querySelector('#n1').src = gl[n1_img];
                        n1.n1_img < gl.length - 1 ? n1.n1_img++ : n1.n1_img = 0
                    }
                    break;
                case 8:
                    if (8 == a) {
                        n2.src = gl[n2_img];
                        document.querySelector('#n2').src = gl[n2_img];
                        n2.n2_img < gl.length - 1 ? n2.n2_img++ : n2.n2_img = 0
                    }
                    break;
                case 9:
                    if (9 == a) {
                        n3.src = gl[n3_img];
                        document.querySelector('#n3').src = gl[n3_img];
                        n3.n3_img < gl.length - 1 ? n3.n3_img++ : n3.n3_img = 0
                    }
            }
        }

        function opredelenie() {
            Sw1 = win_1_width.value * win_height.value / 1E3 / 1E3;
            Sw2 = win_2_width.value * win_height.value / 1E3 / 1E3;
            Sw3 = win_3_width.value * win_height.value / 1E3 / 1E3;
            Sdr = dr_width.value * dr_height.value / 1E3 / 1E3;
            Sf1 = win_1_width.value * fr_height.value / 1E3 / 1E3;
            Sf2 = (parseInt(win_1_width.value) + parseInt(win_2_width.value)) * fr_height.value / 1E3 / 1E3;
            Sf3 = (parseInt(win_1_width.value) + parseInt(win_2_width.value) + parseInt(win_3_width.value)) * fr_height.value / 1E3 / 1E3;
            Sf4 = dr_width.value * fr_height2.value / 1E3 / 1E3;
            Sgl = gl_1_width.value * gl_height.value / 1E3 / 1E3;
            Swg = gl_1_width.value * win_height.value / 1E3 / 1E3;
            Swf = gl_1_width.value * fr_height.value / 1E3 / 1E3;
            za_prof = 0;
            1 === type && (allw = parseInt(win_1_width.value) / 1E3, allh = parseInt(win_height.value) / 1E3, S = Sw1, stvorki = [0], stv_img = [w1_img], za_prof = 450 * (2 * allw + 2 * allh) + 900 * S, tip_okna = "<img src='calc_online/t1.jpg' >", cv = 1);
            2 === type && (allw = (parseInt(win_1_width.value) + parseInt(win_2_width.value)) / 1E3, allh = parseInt(win_height.value) / 1E3, S = Sw1 + Sw2, stvorki = [0, 0], stv_img = [w1_img, w2_img], za_prof = 460 * (2 * allw + 3 * allh) + 850 * S, tip_okna = "<img src='calc_online/t2.jpg' >", cv = 1.1);
            3 === type && (allw = (parseInt(win_1_width.value) + parseInt(win_2_width.value) + parseInt(win_3_width.value)) / 1E3, allh = parseInt(win_height.value) / 1E3, S = Sw1 + Sw2 + Sw3, stvorki = [0, 0, 0, 0, 0, 0], stv_img = [w1_img, w2_img, w3_img], za_prof = 440 * (2 * allw + 4 * allh) + 850 * S, cv = 1.1, tip_okna = "<img src='calc_online/t3.jpg' >");
            4 === type && (allw = (parseInt(dr_width.value) + parseInt(win_2_width.value)) / 1E3, allh = parseInt(dr_height.value) / 1E3, S = Sdr + Sw2, stvorki = [0, 0, 0, 0], stv_img = [dr_img, w2_img], za_prof = (3 * dr_width.value + 2 * dr_height.value) / 1E3, za_prof += (2 * win_2_width.value + 2 * win_height.value) / 1E3, za_prof *= 275, za_prof += 850 * S, cv = 1.45, tip_okna = "<img src='calc_online/t4.jpg' >");
            5 === type && (allw = (parseInt(dr_width.value) + parseInt(win_2_width.value) + parseInt(win_3_width.value)) / 1E3, allh = parseInt(dr_height.value) / 1E3, S = Sdr + Sw2 + Sw3, stvorki = [0, 0, 0], stv_img = [dr_img, w2_img, w3_img], za_prof = (3 * dr_width.value + 2 * dr_height.value) / 1E3, za_prof += (2 * (1 * win_2_width.value + 1 * win_3_width.value) + 3 * win_height.value) / 1E3, za_prof *= 320, za_prof += 850 * S, cv = 1.4, tip_okna = "<img src='calc_online/t5.jpg' >");
            6 === type && (allw = parseInt(win_1_width.value) / 1E3, allh = (parseInt(win_height.value) + parseInt(fr_height.value)) / 1E3, S = Sw1 + Sf1, stvorki = [0, 0], stv_img = [w1_img, fr1_img], za_prof = 250 * (3 * allw + 2 * allh) + 700 * S, cv = 1.05, tip_okna = "<img src='calc_online/t6.jpg' >");
            7 === type && (allw = (parseInt(win_1_width.value) + parseInt(win_2_width.value)) / 1E3, allh = (parseInt(win_height.value) + parseInt(fr_height.value)) / 1E3, S = Sw1 + Sw2 + Sf2, stvorki = [0, 0, 0, 0, 0], stv_img = [w1_img, w2_img, fr2_img], za_prof = 280 * (3 * allw + 3 * allh - fr_height.value / 1E3 * 2) + 760 * S, cv = 1.05, tip_okna = "<img src='calc_online/t7.jpg'>");
            8 === type && (allw = (parseInt(win_1_width.value) + parseInt(win_2_width.value) + parseInt(win_3_width.value)) / 1E3, allh = (parseInt(win_height.value) + parseInt(fr_height.value)) / 1E3, S = Sw1 + Sw2 + Sw3 + Sf3, stvorki = [0, 0, 0, 0], stv_img = [w1_img, w2_img, w3_img, fr3_img], za_prof = 350 * (3 * allw + 4 * allh - fr_height.value / 1E3 * 2) + 840 * S, cv = 1.05, tip_okna = "<img src='calc_online/t8.jpg' >");
            9 === type && (allw = parseInt(gl_1_width.value) / 1E3, allh = (parseInt(win_height.value) + parseInt(gl_height.value)) / 1E3, S = Swg + Sgl, stvorki = [Swg, Swg], stv_img = [w1_img, w2_img], za_prof = 400 * (3 * allw + 2 * allh) + 900 * S, cv = 1.1, tip_okna = "<img src='calc_online/t9.jpg' >");
            10 === type && (allw = (parseInt(dr_width.value)) / 1E3, allh = parseInt(dr_height.value) / 1E3, S = Sdr, stvorki = [-Sdr], stv_img = [dr_img], za_prof = (3 * dr_width.value + 2 * dr_height.value) / 1E3, za_prof *= 330, za_prof += 900 * S, cv = 1.1, tip_okna = "<img src='calc_online/t10.jpg' >");
            12 === type && (allw = (parseInt(dr_width.value)) / 1E3, allh = (parseInt(dr_height.value) + parseInt(fr_height2.value)) / 1E3, S = Sdr + Sf4, stvorki = [0, 0, 0, 0], stv_img = [dr_img, fr1_img],
                za_prof = (3 * dr_width.value + 2 * dr_height.value) / 1E3, za_prof += (2 * dr_width.value + 2 * fr_height2.value) / 1E3, za_prof *= 380, za_prof += 1E3 * S, cv = 1.45, tip_okna = "<img src='/img/t12.jpg' >");
            allwh_pole.innerHTML = "\u041E\u0431\u0449\u0438\u0435\u0020\u0440\u0430\u0437\u043C\u0435\u0440\u044B\u003A\u0020\u0448" + 1E3 * allw + " &times;\u0020\u0432" + 1E3 * allh + "\u0020\u043C\u043C\u002E"
        }

        function test_razm() {
            oshibka_w = oshibka = "";
            width = [win_1_width, win_2_width, win_3_width, gl_1_width];
            dr_width.style.color = 450 > dr_width.value || 1200 < dr_width.value ? "#ff0000" : "#707070";
            fr_height.style.color = 450 > fr_height.value || 1E3 < fr_height.value ? "#F00" : "#707070";
            fr_height2.style.color = 450 > fr_height2.value || 1E3 < fr_height2.value ? "#F00" : "#707070";
            gl_height.style.color = 450 > gl_height.value || 1500 < gl_height.value ? "#F00" : "#707070";
            dr_height.style.color = 1700 > dr_height.value || 2300 < dr_height.value ? "#F00" : "#707070";
            win_height.style.color = 400 > win_height.value || 2300 < win_height.value ? "#F00" : "#707070";
            for (poz_w = 0; poz_w < width.length; poz_w++) width[poz_w].style.color = 400 > width[poz_w].value || 1500 < width[poz_w].value ? "#F00" : "#707070";
            opredelenie()
        }

        function dopolnitelno() {
            dop_info = "\u003C\u0073\u0074\u0072\u006F\u006E\u0067\u003E\u0412\u0020\u0446\u0435\u043D\u0443\u0020\u0432\u0445\u043E\u0434\u0438\u0442\u003A\u0020\u003C\u002F\u0073\u0074\u0072\u006F\u006E\u0067\u003E\u0444\u0443\u0440\u043D\u0438\u0442\u0443\u0440\u0430\u002C\u0020\u0433\u0430\u0440\u0430\u043D\u0442\u0438\u044F";
            dop_dost = dop_mntz = dop_stpk = dop_stf = dop_porog = "";
            1 <= montazh.value && (dop_mntz = "\u002C\u0020\u0434\u0435\u043C\u043E\u043D\u0442\u0430\u0436\u0020\u0441\u0442\u0430\u0440\u043E\u0433\u043E\u0020\u043E\u043A\u043D\u0430");
            if (4 == type || 5 == type || 12 == type) dop_porog = "\u002C\u0020\u043F\u043E\u0440\u043E\u0433\u0020\u043F\u043E\u0434\u0020\u0434\u0432\u0435\u0440\u044C\u044E\u002C\u0020\u0431\u0430\u043B\u043A\u043E\u043D\u043D\u0430\u044F\u0020\u0437\u0430\u0449\u0435\u043B\u043A\u0430";
            4 == montazh.value && (dop_stf = "\u002C\u0020\u0440\u0430\u0431\u043E\u0442\u0430\u0020\u0441\u0020\u0448\u0442\u0443\u043A\u0430\u0442\u0443\u0440\u043A\u043E\u0439");
            1 <= dostavka.value && (dop_dost = "\u002C\u0020\u043F\u043E\u0434\u044A\u0435\u043C\u0020\u043D\u0430\u0020\u044D\u0442\u0430\u0436\u002E");
            0 == steklopaket.value && (dop_stpk = "");
            dop_info += dop_mntz + dop_porog + dop_stf + dop_stpk + dop_dost;
            pole_info.innerHTML = "" + dop_info
        }

        function test() {
            dopolnitelno();
            width = [win_1_width, win_2_width, win_3_width, gl_1_width];
            res = !0;
            if (450 > dr_width.value || 1200 < dr_width.value) res = !1, oshibka += "\u002D\u0421\u043B\u0438\u0448\u043A\u043E\u043C\u0020\u0448\u0438\u0440\u043E\u043A\u0430\u044F\u0020\u0434\u0432\u0435\u0440\u044C\u003B\u0020\n";
            if (450 > fr_height.value || 1E3 < fr_height.value) res = !1, oshibka += "\u002D\u0421\u043B\u0438\u0448\u043A\u043E\u043C\u0020\u0432\u044B\u0441\u043E\u043A\u0430\u044F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0430\u003B\u0020\n";
            if (450 > fr_height2.value || 1E3 < fr_height2.value) res = !1, oshibka += "\u002D\u0421\u043B\u0438\u0448\u043A\u043E\u043C\u0020\u0432\u044B\u0441\u043E\u043A\u0430\u044F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0430\u003B\u0020\n";
            if (450 > gl_height.value || 1500 < gl_height.value) res = !1, oshibka += "\u002D\u0421\u043B\u0438\u0448\u043A\u043E\u043C\u0020\u0432\u044B\u0441\u043E\u043A\u0430\u044F\u0020\u043D\u0438\u0436\u043D\u044F\u044F\u0020\u0447\u0430\u0441\u0442\u044C\u003B\u0020\n";
            if (1700 > dr_height.value || 2300 < dr_height.value) res = !1, oshibka += "\u002D\u0421\u043B\u0438\u0448\u043A\u043E\u043C\u0020\u0432\u044B\u0441\u043E\u043A\u0430\u044F\u0020\u0434\u0432\u0435\u0440\u044C\u003B\u0020\n";
            if (400 > win_height.value || 2300 < win_height.value) res = !1, oshibka += "\u002D\u041D\u0435\u043A\u043E\u0440\u0440\u0435\u043A\u0442\u043D\u044B\u0439\u0020\u0440\u0430\u0437\u043C\u0435\u0440\u0020\u043E\u043A\u043D\u0430\u003B\u0020\n";
            for (poz_w = 0; poz_w < width.length; poz_w++)
                if (400 > width[poz_w].value || 2100 < width[poz_w].value) res = !1, oshibka_w = "\u002D\u0020\u041E\u0434\u0438\u043D\u0020\u0438\u0437\u0020\u044D\u043B\u0435\u043C\u0435\u043D\u0442\u043E\u0432\u0020\u043A\u043E\u043D\u0441\u0442\u0440\u0443\u043A\u0446\u0438\u0438\u0020\u0438\u043C\u0435\u0435\u0442\u0020\u043E\u0448\u0438\u0431\u043E\u0447\u043D\u044B\u0439\u0020\u0440\u0430\u0437\u043C\u0435\u0440\u003B\u0020\n";
            if (res) {
                var a = 0,
                    b = 0,
                    d = 0,
                    e = 0,
                    g = 0,
                    f = 0,
                    c = 0;
                opredelenie();
                for (i = 0; i <= stv_img.length; i++) 2 == stv_img[i] && (d += 3100 + 1E3 * (stvorki[i] - 1)), 1 == stv_img[i] && (e += 3100 + 1E3 * (stvorki[i] - 1));
                if (4 == type || 5 == type || 10 == type) g = 1 == dr_img ? 2850 : 1800;
                if (9 == type || 11 == type) 1 == n1_img ? (f = -150, cv = 1.75) : f = 0;
                montaz_ceni = [0, 800, 690, 800, 1E3];
                otk_ceni = [
                    [0, 430, 560],
                    [0, 860, 1100],
                    [0, 960, 1250],
                    [0, 1200, 1560],
                    [0, 1600, 2200]
                ];
                0 == prof_color.value && (cv = 1);
                a += za_prof;
                //a += a * (1 * profil.value + 1 * steklopaket.value);
                a += d + .8 * e + g + f;
                a += 1 * a * prof_color.value * cv;
                a += steklo_tip.value * S;
                a += podokonnik.value * allw * 1.1;
                if (moskitnaya.checked) {
                    a += 685;
                }
                vodootliv.checked ? (a += 186 * allw, b += 120 * allw) : (a += 0, b += 0);
                za_bb = 4 == type || 5 == type ? 1125 : 0;
                330 >= podokonnik.value & 0 < podokonnik.value && (b += 324 * allw);
                540 >= podokonnik.value & 330 < podokonnik.value && (b += 420 * allw);
                720 >= podokonnik.value & 540 < podokonnik.value && (b += 480 * allw);
                b = 0 !== montaz_ceni[montazh.value] ? 3.2 <= S ? b + (S * montaz_ceni[montazh.value] + za_bb) : b + (3.2 * montaz_ceni[montazh.value] + za_bb) : b + 0;
                b = 0 !== otk_ceni[montazh.value][otkosi.value] ? b + otk_ceni[montazh.value][otkosi.value] * (2 * allh + allw) : b + 0;
                c = c + .9375 * a + b;
                c *= count.value;
                20 < count.value ? alert("\u0427\u0442\u043E\u0431\u044B\u0020\u0443\u0437\u043D\u0430\u0442\u044C\u0020\u0441\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u044C\u0020\u0442\u0430\u043A\u043E\u0433\u043E\u0020\u043A\u043E\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u0430\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u0439\u0020\u043F\u043E\u0437\u0432\u043E\u043D\u0438\u0442\u0435\u0020\u0038\u0020\u0028\u0038\u0031\u0032\u0029\u0020\u0034\u0035\u0034\u002D\u0031\u0038\u002D\u0037\u0037\u002C\u0020\u043C\u044B\u0020\u043F\u0440\u043E\u0438\u0437\u0432\u0435\u0434\u0435\u043C\u0020\u0440\u0430\u0441\u0447\u0435\u0442\u002E") : (s_dostavkoy = 0 < dostavka.value ? "\u0020\u0438\u0020\u0434\u043E\u0441\u0442\u0430\u0432\u043A\u043E\u0439\u003A\u0020" : ": ", old_za_okno_bd = c + c * noskidka + 1 * dostavka.value, old_za_okno_sd = c + 1 * dostavka.value, new_za_okno_sd_nd = c * skidka, new_za_okno_bd = old_za_okno_bd * skidka, new_za_okno_sd = old_za_okno_sd * skidka, new_price.innerHTML = "\u003C\u0073\u0070\u0061\u006E\u0020\u0073\u0074\u0079\u006C\u0065\u003D\u0027\u0063\u006F\u006C\u006F\u0072\u003A\u0023\u0043\u0043\u0043\u0027\u003E\u003C\u0064\u0065\u006C\u003E" + Math.round(old_za_okno_bd) + "\u003C\u002F\u0064\u0065\u006C\u003E\u003C\u002F\u0073\u0070\u0061\u006E\u003E\u0020" + Math.round(new_za_okno_sd) + "\u0020\u0440\u0443\u0431\u002E\u0020" + "")
            } else alert("\u041D\u0430\u043F\u043E\u043C\u0438\u043D\u0430\u0435\u043C\u002C\u0020\u0432\u0441\u0435\u0020\u0440\u0430\u0437\u043C\u0435\u0440\u044B\u0020\u0432\u0432\u043E\u0434\u044F\u0442\u0441\u044F\u0020\u0432\u0020\u043C\u0438\u043B\u043B\u0438\u043C\u0435\u0442\u0440\u0430\u0445\u0021\n\u0414\u043E\u043F\u0443\u0449\u0435\u043D\u043D\u044B\u0435\u0020\u043E\u0448\u0438\u0431\u043A\u0438\u003A\n\n" + oshibka + oshibka_w + "\n\u041E\u0448\u0438\u0431\u043E\u0447\u043D\u044B\u0439\u0020\u0432\u0430\u0440\u0438\u0430\u043D\u0442\u0020\u0432\u044B\u0434\u0435\u043B\u0435\u043D\u0020\u043A\u0440\u0430\u0441\u043D\u044B\u043C\u002E")
        }

        function remember() {
            text_count = tip_zap = tip_montazh = tip_steklopaket = tip_vodootliv = tip_moskitnaya = tip_podokonnik = tip_otkosi = tip_dostavka = tip_stvorki = tip_fr_1 = tip_fr_2 = tip_fr_3 = tip_ok_1 = tip_ok_2 = tip_ok_3 = tip_dv = tip_gl_1 = "";
            switch (fr_1[fr1_img]) {
                case "/img/fram_1_ot.jpg":
                    tip_fr_1 = "\u0422\u0438\u043F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020\u0413\u043B\u0443\u0445\u0430\u044F";
                    break;
                case "/img/fram_1.jpg":
                    tip_fr_1 = "\u0422\u0438\u043F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (gl[n1_img]) {
                case "/img/fram_1.jpg":
                    tip_gl_1 = "\u041D\u0438\u0437\u003A\u0020\u0413\u043B\u0443\u0445\u043E\u0439\u0020\u0028\u0441\u0435\u043D\u0434\u0432\u0438\u0447\u0029";
                    break;
                case "/img/fram_1_sp.jpg":
                    tip_gl_1 = "\u041D\u0438\u0437\u003A\u0020\u0413\u043B\u0443\u0445\u043E\u0439\u0020\u0028\u0441\u0442\u0435\u043A\u043B\u043E\u0029"
            }
            switch (fr_2[fr2_img]) {
                case "/img/fram_2_ot.jpg":
                    tip_fr_2 = "\u0422\u0438\u043F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020\u0413\u043B\u0443\u0445\u0430\u044F";
                    break;
                case "/img/fram_2.jpg":
                    tip_fr_2 = "\u0422\u0438\u043F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (fr_3[fr3_img]) {
                case "/img/fram_3_ot.jpg":
                    tip_fr_3 = "\u0422\u0438\u043F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020\u0413\u043B\u0443\u0445\u0430\u044F";
                    break;
                case "/img/fram_3.jpg":
                    tip_fr_3 = "\u0422\u0438\u043F\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (okna[w1_img]) {
                case "/img/stv_pv.jpg":
                    tip_ok_1 = "\u0422\u0438\u043F\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020\u0413\u043B\u0443\u0445\u0430\u044F";
                    break;
                case "/img/stv_po.jpg":
                    tip_ok_1 = "\u0422\u0438\u043F\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u0430\u044F";
                    break;
                case "/img/stv_gl.jpg":
                    tip_ok_1 = "\u0422\u0438\u043F\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u043E\u002F\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (okna2[w2_img]) {
                case "/img/stv_pv_l.jpg":
                    tip_ok_2 = "\u0020\u007C\u0020\u0413\u043B\u0443\u0445\u0430\u044F";
                    break;
                case "/img/stv_po_l.jpg":
                    tip_ok_2 = "\u0020\u007C\u0020\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u0430\u044F";
                    break;
                case "/img/stv_gl.jpg":
                    tip_ok_2 = "\u0020\u007C\u0020\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u043E\u002F\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (okna2[w3_img]) {
                case "/img/stv_pv_l.jpg":
                    tip_ok_3 = "\u0413\u043B\u0443\u0445\u0430\u044F";
                    break;
                case "/img/stv_po_l.jpg":
                    tip_ok_3 = "\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u0430\u044F";
                    break;
                case "/img/stv_gl_l.jpg":
                    tip_ok_3 = "\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u043E\u002F\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (door[dr_img]) {
                case "/img/dr_po.jpg":
                    tip_dv = "\u0414\u0432\u0435\u0440\u044C\u003A\u0020\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u0430\u044F";
                    break;
                case "/img/dr_pv.jpg":
                    tip_dv = "\u0414\u0432\u0435\u0440\u044C\u003A\u0020\u041F\u043E\u0432\u043E\u0440\u043E\u0442\u043D\u043E\u002F\u041E\u0442\u043A\u0438\u0434\u043D\u0430\u044F"
            }
            switch (type) {
                case 1:
                    tip_zap = "\u041E\u0434\u043D\u043E\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E";
                    tip_stvorki = tip_ok_1 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043A\u0438\u003A\u0020" + win_1_width.value + "";
                    break;
                case 2:
                    tip_zap = "\u0414\u0432\u0443\u0445\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E";
                    tip_stvorki = tip_ok_1 + tip_ok_2 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + win_1_width.value + "\u0020\u007C\u0020" + win_2_width.value + "";
                    break;
                case 3:
                    tip_zap = "\u0422\u0440\u0451\u0445\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E";
                    tip_stvorki = tip_ok_1 + tip_ok_2 + "\u0020\u007C\u0020" + tip_ok_3 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + win_1_width.value + "\u0020\u007C\u0020" + win_2_width.value + "\u0020\u007C\u0020" + win_3_width.value + "";
                    break;
                case 4:
                    tip_zap = "\u041E\u0434\u043D\u043E\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E\u0020\u0438\u0020\u0434\u0432\u0435\u0440\u044C";
                    tip_stvorki = tip_dv + "\u002C\u0020\u0422\u0438\u043F\u0020\u0441\u0442\u0432\u043E\u0440\u043A\u0438\u003A\u0020" + tip_ok_2 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043A\u0438\u003A\u0020" + win_2_width.value + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043A\u0438\u003A\u0020" + win_height.value + "";
                    break;
                case 5:
                    tip_zap = "\u0414\u0432\u0443\u0445\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E\u0020\u0438\u0020\u0434\u0432\u0435\u0440\u044C";
                    tip_stvorki = tip_dv + "\u002C\u0020\u0422\u0438\u043F\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + tip_ok_2 + "\u0020\u007C\u0020" + tip_ok_3 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + win_2_width.value + "\u0020\u007C\u0020" + win_3_width.value + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + win_height.value + "";
                    break;
                case 6:
                    tip_zap = "\u041E\u0434\u043D\u043E\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E\u0020\u0441\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u043E\u0439";
                    tip_stvorki = tip_ok_1 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043A\u0438\u003A\u0020" + win_1_width.value + ", " + tip_fr_1 + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020" + fr_height.value + "";
                    break;
                case 7:
                    tip_zap = "\u0414\u0432\u0443\u0445\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E\u0020\u0441\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u043E\u0439";
                    tip_stvorki = tip_ok_1 + tip_ok_2 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + win_1_width.value + "\u0020\u007C\u0020" + win_2_width.value + "\u002C\u0020" + tip_fr_2 + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020" + fr_height.value + "";
                    break;
                case 8:
                    tip_zap = "\u0422\u0440\u0451\u0445\u0441\u0442\u0432\u043E\u0440\u0447\u0430\u0442\u043E\u0435\u0020\u043E\u043A\u043D\u043E\u0020\u0441\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u043E\u0439";
                    tip_stvorki = tip_ok_1 + tip_ok_2 + "\u0020\u007C\u0020" + tip_ok_3 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043E\u043A\u003A\u0020" + win_1_width.value + "\u0020\u007C\u0020" + win_2_width.value + "\u0020\u007C\u0020" + win_3_width.value + "\u002C\u0020" + tip_fr_3 + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020" + fr_height.value + "";
                    break;
                case 9:
                    tip_zap = "\u041D\u0430\u043F\u043E\u043B\u044C\u043D\u043E\u0435\u0020\u0434\u0432\u0443\u0445\u0441\u0435\u043A\u0446\u0438\u043E\u043D\u043D\u043E\u0435\u0020\u043E\u043A\u043D\u043E";
                    tip_stvorki = tip_ok_1 + "\u002C\u0020\u0428\u0438\u0440\u0438\u043D\u0430\u0020\u0441\u0442\u0432\u043E\u0440\u043A\u0438\u003A\u0020" + gl_1_width.value + "\u002C\u0020" + tip_gl_1 + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u043D\u0438\u0437\u0430\u003A\u0020" + gl_height.value + "";
                    break;
                case 10:
                    tip_zap = "\u0411\u0430\u043B\u043A\u043E\u043D\u043D\u0430\u044F\u0020\u0434\u0432\u0435\u0440\u044C";
                    tip_stvorki = tip_dv;
                    break;
                case 12:
                    tip_zap = "\u0411\u0430\u043B\u043A\u043E\u043D\u043D\u0430\u044F\u0020\u0434\u0432\u0435\u0440\u044C\u0020\u0441\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u043E\u0439";
                    tip_stvorki = tip_dv + "\u002C\u0020" + tip_fr_1 + "\u002C\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u0020\u0444\u0440\u0430\u043C\u0443\u0433\u0438\u003A\u0020" + fr_height2.value + "";
                    ;
            }
            switch (1 * steklopaket.value) {
                case 0:
                    tip_steklopaket = "\u0421\u0442\u0435\u043A\u043B\u043E\u043F\u0430\u043A\u0435\u0442\u003A\u0020\u041E\u0434\u043D\u043E\u043A\u0430\u043C\u0435\u0440\u043D\u044B\u0439";
                    break;
                case 0.05:
                    tip_steklopaket = "\u0421\u0442\u0435\u043A\u043B\u043E\u043F\u0430\u043A\u0435\u0442\u003A\u0020\u041E\u0434\u043D\u043E\u043A\u0430\u043C\u0435\u0440\u043D\u044B\u0439\u0020\u044D\u043D\u0435\u0440\u0433\u043E\u0441\u0431\u0435\u0440\u0435\u0433\u0430\u044E\u0449\u0438\u0439";
                    break;
                case 0.2:
                    tip_steklopaket = "\u0421\u0442\u0435\u043A\u043B\u043E\u043F\u0430\u043A\u0435\u0442\u003A\u0020\u0414\u0432\u0443\u0445\u043A\u0430\u043C\u0435\u0440\u043D\u044B\u0439";
                    break;
                case 0.25:
                    tip_steklopaket = "\u0421\u0442\u0435\u043A\u043B\u043E\u043F\u0430\u043A\u0435\u0442\u003A\u0020\u0414\u0432\u0443\u0445\u043A\u0430\u043C\u0435\u0440\u043D\u044B\u0439\u0020\u044D\u043D\u0435\u0440\u0433\u043E\u0441\u0431\u0435\u0440\u0435\u0433\u0430\u044E\u0449\u0438\u0439"
            }
            if (moskitnaya.checked) {
                tip_moskitnaya = "\u041C\u043E\u0441\u043A\u0438\u0442\u043D\u0430\u044F\u0020\u0441\u0435\u0442\u043A\u0430\u003A\u0020\u0414\u0430";
            } else {
                tip_moskitnaya = "\u041C\u043E\u0441\u043A\u0438\u0442\u043D\u0430\u044F\u0020\u0441\u0435\u0442\u043A\u0430\u003A\u0020\u041D\u0435\u0442";
            }
            if (vodootliv.checked) {
                tip_vodootliv = "\u0412\u043E\u0434\u043E\u043E\u0442\u043B\u0438\u0432\u003A\u0020\u0414\u0430";
            } else {
                tip_vodootliv = "\u0412\u043E\u0434\u043E\u043E\u0442\u043B\u0438\u0432\u003A\u0020\u041D\u0435\u0442";
            }
            switch (1 * podokonnik.value) {
                case 0:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041D\u0435\u0442";
                    break;
                case 180:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0434\u043E\u0020\u0031\u0030\u0030\u0020\u043C\u043C\u002E";
                    break;
                case 240:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0031\u0030\u0031\u002D\u0032\u0030\u0030\u0020\u043C\u043C\u002E";
                    break;
                case 330:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0032\u0030\u0031\u002D\u0033\u0030\u0030\u0020\u043C\u043C\u002E";
                    break;
                case 440:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0033\u0030\u0031\u002D\u0034\u0030\u0030\u0020\u043C\u043C\u002E";
                    break;
                case 540:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0034\u0030\u0031\u002D\u0035\u0030\u0030\u0020\u043C\u043C\u002E";
                    break;
                case 930:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0035\u0030\u0031\u002D\u0036\u0030\u0030\u0020\u043C\u043C\u002E";
                    break;
                case 1120:
                    tip_podokonnik = "\u041F\u043E\u0434\u043E\u043A\u043E\u043D\u043D\u0438\u043A\u003A\u0020\u041F\u043B\u0430\u0441\u0442\u0438\u043A\u003A\u0020\u0036\u0030\u0031\u002D\u0037\u0030\u0030\u0020\u043C\u043C\u002E"
            }
            switch (1 * otkosi.value) {
                case 0:
                    tip_otkosi = "\u041E\u0442\u043A\u043E\u0441\u044B\u003A\u0020\u041D\u0435\u0442";
                    break;
                case 1:
                    tip_otkosi = "\u041E\u0442\u043A\u043E\u0441\u044B\u003A\u0020\u0421\u044D\u043D\u0434\u0432\u0438\u0447\u002D\u043F\u0430\u043D\u0435\u043B\u044C"
            }
            switch (1 * montazh.value) {
                case 0:
                    tip_montazh = "\u0411\u0435\u0437\u0020\u043C\u043E\u043D\u0442\u0430\u0436\u0430";
                    break;
                case 1:
                    tip_montazh = "\u041C\u043E\u043D\u0442\u0430\u0436\u0020\u0432\u0020\u043A\u043E\u0440\u0430\u0431\u043B\u0435\u0020\u002F\u0020\u0431\u0430\u043B\u043A\u043E\u043D\u043D\u044B\u0439\u0020\u0431\u043B\u043E\u043A";
                    break;
                case 2:
                    tip_montazh = "\u041C\u043E\u043D\u0442\u0430\u0436\u0020\u0432\u0020\u043F\u0430\u043D\u0435\u043B\u044C\u043D\u043E\u043C\u0020\u002F\u0020\u0434\u0435\u0440\u0435\u0432\u044F\u043D\u043D\u043E\u043C\u0020\u0434\u043E\u043C\u0435";
                    break;
                case 3:
                    tip_montazh = "\u041C\u043E\u043D\u0442\u0430\u0436\u0020\u0432\u0020\u043A\u0438\u0440\u043F\u0438\u0447\u043D\u043E\u043C\u0020\u0434\u043E\u043C\u0435";
                    break;
                case 4:
                    tip_montazh = "\u041C\u043E\u043D\u0442\u0430\u0436\u0020\u0432\u0020\u0441\u0442\u0430\u0440\u043E\u043C\u0020\u0444\u043E\u043D\u0434\u0435"
            }
            switch (1 * dostavka.value) {
                case 0:
                    tip_dostavka = "\u0411\u0435\u0437\u0020\u0434\u043E\u0441\u0442\u0430\u0432\u043A\u0438";
                    break;
                case 1180:
                    tip_dostavka = "\u0414\u043E\u0441\u0442\u0430\u0432\u043A\u0430\u003A\u0020\u0412\u0020\u0447\u0435\u0440\u0442\u0435\u0020\u0433\u043E\u0440\u043E\u0434\u0430";
                    break;
                case 1400:
                    tip_dostavka = "\u0414\u043E\u0441\u0442\u0430\u0432\u043A\u0430\u003A\u0020\u0417\u0430\u0020\u0433\u043E\u0440\u043E\u0434\u002E\u0020\u0414\u043E\u0020\u0034\u0030\u0020\u043A\u043C\u002E";
                    break;
                case 1800:
                    tip_dostavka = "\u0414\u043E\u0441\u0442\u0430\u0432\u043A\u0430\u003A\u0020\u0417\u0430\u0020\u0433\u043E\u0440\u043E\u0434\u002E\u0020\u0414\u043E\u0020\u0036\u0030\u0020\u043A\u043C\u002E";
                    break;
                case 2200:
                    tip_dostavka = "\u0414\u043E\u0441\u0442\u0430\u0432\u043A\u0430\u003A\u0020\u0417\u0430\u0020\u0433\u043E\u0440\u043E\u0434\u002E\u0020\u0414\u043E\u0020\u0038\u0030\u0020\u043A\u043C\u002E"
            }
            switch (1 * count.value) {
                case 1:
                    text_count = "\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u0435";
                    break;
                case 2:
                case 3:
                case 4:
                    text_count = "\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u044F";
                    break;
                default:
                    text_count = "\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u0439"
            }
            test();
            total_price += new_za_okno_sd;
            total_count += 1 * count.value;
            switch (total_count) {
                case 1:
                    izdelie = "\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u0435";
                    break;
                case 2:
                case 3:
                case 4:
                    izdelie = "\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u044F";
                    break;
                default:
                    izdelie = "\u0020\u0438\u0437\u0434\u0435\u043B\u0438\u0439"
            }
            zahodov = Math.round(total_count / 8);
            1 > zahodov && (zahodov = 1);
            total_dost = zahodov * dostavka.value;
            pole.innerHTML += "\u003C\u0062\u0072\u0020\u002F\u003E\u2116" + (nom_zap += 1) + "\u0020\u007C\u0020\u003C\u0073\u0074\u0072\u006F\u006E\u0067\u003E" + tip_zap + "\u003C\u002F\u0073\u0074\u0072\u006F\u006E\u0067\u003E\u0020\u007C\u0020" + count.value + text_count + "\u0020\u007C\u0020\u0421\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u044C\u0020\u0431\u0435\u0437\u0020\u0434\u043E\u0441\u0442\u0430\u0432\u043A\u0438\u003A\u003C\u0073\u0074\u0072\u006F\u006E\u0067\u003E" + Math.round(new_za_okno_sd_nd) + "\u0020\u0440\u0443\u0431\u002E\u003C\u002F\u0073\u0074\u0072\u006F\u006E\u0067\u003E\u041E\u0431\u0449\u0430\u044F\u0020\u0448\u0438\u0440\u0438\u043D\u0430\u003A\u0020" + 1E3 * allw + "\u0020\u0412\u044B\u0441\u043E\u0442\u0430\u003A\u0020" + 1E3 * allh + "\u002C\u0020" + tip_stvorki + "\u002C\u0020" + tip_steklopaket + "\u002C\u0020" + tip_moskitnaya + "\u002C\u0020" + tip_podokonnik + "\u002C\u0020" + tip_vodootliv + "\u002C\u0020" + tip_montazh + "\u002C\u0020" + tip_otkosi + "\u002C\u0020" + tip_dostavka;
            changeText();
            pole_itog.style.display = "block", pole_itog.innerHTML = "\u0418\u0442\u043E\u0433\u043E\u0432\u0430\u044F\u0020\u0446\u0435\u043D\u0430\u0020\u0437\u0430\u0020" + total_count + izdelie + "\u0020\u0441\u043E\u0020\u0441\u043A\u0438\u0434\u043A\u043E\u0439\u002A" + s_dostavkoy + "\u003C\u0073\u0074\u0072\u006F\u006E\u0067\u003E" + Math.round(total_price) + "\u0020\u0440\u0443\u0431\u002E\u0020\u003C\u002F\u0073\u0074\u0072\u006F\u006E\u0067\u003E\u003C\u0062\u0072\u0020\u002F\u003E\u003C\u0066\u006F\u0072\u006D\u0020\u0069\u0064\u003D\u0027\u007A\u0061\u006B\u0061\u007A\u0027\u0020\u006D\u0065\u0074\u0068\u006F\u0064\u003D\u0027\u0070\u006F\u0073\u0074\u0027\u0020\u0061\u0063\u0074\u0069\u006F\u006E\u003D\u0027\u0068\u0074\u0074\u0070\u003A\u002F\u002F\u0076\u0065\u006B\u0061\u002D\u0073\u0070\u0062\u002E\u0072\u0075\u002F\u006F\u0072\u0064\u0065\u0072\u005F\u006F\u006E\u006C\u0069\u006E\u0065\u002E\u0068\u0074\u006D\u006C\u0027\u003E\u003C\u0069\u006E\u0070\u0075\u0074\u0020\u0074\u0079\u0070\u0065\u003D\u0027\u0068\u0069\u0064\u0064\u0065\u006E\u0027\u0020\u006E\u0061\u006D\u0065\u003D\u0027\u007A\u0061\u006B\u0061\u007A\u0027\u0020\u0069\u0064\u003D\u0027\u007A\u0061\u006B\u0061\u007A\u0063\u006F\u006E\u0074\u0065\u006E\u0074\u0027\u0020\u0068\u0069\u0064\u0064\u0065\u006E\u003D\u0027\u0068\u0069\u0064\u0064\u0065\u006E\u0027\u0020\u0076\u0061\u006C\u0075\u0065\u003D\u0027" + checkout + "\u0027\u0020\u002F\u003E\u003C\u0064\u0069\u0076\u0020\u0061\u006C\u0069\u0067\u006E\u003D\u0027\u0063\u0065\u006E\u0074\u0065\u0072\u0027\u003E\u003C\u0069\u006E\u0070\u0075\u0074\u0020\u0074\u0079\u0070\u0065\u003D\u0027\u0073\u0075\u0062\u006D\u0069\u0074\u0027\u0020\u0063\u006C\u0061\u0073\u0073\u003D\u0027\u0075\u006B\u002D\u0062\u0075\u0074\u0074\u006F\u006E\u0027\u0020\u0020\u0076\u0061\u006C\u0075\u0065\u003D\u0027\u0417\u0430\u043A\u0430\u0437\u0430\u0442\u044C\u0027\u0020\u0073\u0074\u0079\u006C\u0065\u003D\u0027\u0068\u0065\u0069\u0067\u0068\u0074\u003A\u0034\u0030\u0070\u0078\u003B\u0077\u0069\u0064\u0074\u0068\u003A\u0031\u0030\u0030\u0070\u0078\u003B\u0066\u006F\u006E\u0074\u002D\u0073\u0069\u007A\u0065\u003A\u0031\u0034\u0070\u0078\u0027\u0020" + "onclick=\"yaCounter19583686.reachGoal('clickZakazOnline'); ga('send', 'event', 'Knopka', 'Zakazonline'); kCall1(); return true;\"" + "\u0020\u002F\u003E\u003C\u002F\u0064\u0069\u0076\u003E\u003C\u002F\u0066\u006F\u0072\u006D\u003E";
            count.value = 1
        }

        function remember_sbros() {
            pole.innerHTML = "";
            pole_itog.style.display = "none";
            pole_itog.innerHTML = "";
            total_count = total_price = nom_zap = 0;
            sbros()
        }
    </script>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="3" width="100%" valign="top">
                <h3>1. ВЫБЕРИТЕ ТИП КОНСТРУКЦИИ</h3>
                <form class="box style">
                    <fieldset>
                        <legend>Выберите конструкцию для расчета</legend>
                        <div class="calkminipics" align="center">
                            <img src="/img/mini_1.jpg" class="icon" onclick="type=1; upload()" title="Расчет одностворчатого окна" alt="Расчет одностворчатого окна">
                            <img src="/img/mini_6.jpg" class="icon" onclick="type=6; upload()" title="Расчет Т-образного окна" alt="Расчет Т-образного окна">
                            <img src="/img/mini_2.jpg" class="icon" onclick="type=2; upload()" title="Расчет двухстворчатого окна" alt="Расчет двухстворчатого окна">
                            <img src="/img/mini_7.jpg" class="icon" onclick="type=7; upload()" title="Расчет Т-образного двухстворчатого окна" alt="Расчет Т-образного двухстворчатого окна">
                            <img src="/img/mini_3.jpg" class="icon" onclick="type=3; upload()" title="Расчет трехстворчатого окна" alt="Расчет трехстворчатого окна" />
                            <img src="/img/mini_8.jpg" class="icon" onclick="type=8; upload()" title="Расчет Т-образного 3-х створчатого окна" alt="Расчет Т-образного 3-х створчатого окна">
                            <img src="/img/mini_4.jpg" class="icon" onclick="type=4; upload()" title="Расчет балконного блока" alt="Расчет балконного блока">
                            <img src="/img/mini_5.jpg" class="icon" onclick="type=5; upload()" title="Расчет двухстворчатого балконного блока" alt="Расчет двухстворчатого балконного блока">
                            <img src="/img/mini_10.jpg" class="icon" onclick="type=10; upload()" title="Расчет балконной двери" alt="Расчет балконной двери">
                            <img src="/img/mini_12.jpg" class="icon" onclick="type=12; upload()" title="Расчет балконной двери с фрамугой" alt="Расчет балконной двери с фрамугой">
                        </div>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td width="100%" valign="top">
                <h3>2. УКАЖИТЕ ПАРАМЕТРЫ КОНСТРУКЦИИ</h3>
                <form class="box style">
                    <fieldset>
                        <legend>Нажмите на створку, изменяя её тип, заполните размеры</legend>
                        <div align="center" style="height:456px;">
                            <div class="box-warning">ВНИМАНИЕ ! Обязательно выберите поворотные и/или поворотно-откидные створки, иначе окно будет глухим (без открывающихся створок).
                            </div>
                            <table cellpadding="0" cellspacing="0" border="0"><tbody><tr>
                                    <td class="td_input" style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_h" id="fr_div_h_l" style="display: none; line-height:10px;">Высота<br />фрамуги<br>
                                            <input class="wh" type="text" id="fr_height2" name="textfield" maxlength="3" value="600" onkeyup="test_razm()" ></div></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="fr_div_1" style="display: none;padding:0; margin:0; height:71px; cursor:pointer;"><img src="/img/fram_1.jpg" id="f1" onclick="smena_img(4,4)" alt="Глухая фрамуга"></div></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="fr_div_2" style="display: none;padding:0; margin:0; height:71px; cursor:pointer;"><img src="/img/fram_2.jpg" id="f2" onclick="smena_img(5,5)" alt="Стоимость окна"></div></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="fr_div_3" style="display: none;padding:0; margin:0; height:71px; cursor:pointer;"><img src="/img/fram_3.jpg" id="f3" onclick="smena_img(6,6)" title="" alt="Расчет фрамуги"></div></td>
                                    <td class="td_input" style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_h" id="fr_div_h" style="display: none; line-height:10px">Высота<br />фрамуги<br>
                                            <input class="wh" type="text" id="fr_height" name="textfield" maxlength="3" value="600" onkeyup="test_razm()" ></div></td>
                                </tr></tbody></table>

                            <table cellpadding="0" cellspacing="0" border="0"><tbody><tr>
                                    <td class="td_input" style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;">
                                        <div class="input_h" id="dr_div_h" style="display: none; line-height:10px"><br>Высота<br />двери<br>
                                            <input class="wh" type="text" id="dr_height" name="textfield" value="2100" onkeyup="test_razm()" ></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;vertical-align: top;"><div id="win_div_1" style="display: block; cursor:pointer;"><img src="/img/stv_gl.jpg" id="w1" onclick="smena_img(0,0)" alt="Пластиковое окно"></div>
                                    </td>
                                    <td rowspan="2" style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="dr_div_1" style="display: none; cursor:pointer;"><img src="/img/dr_pv.jpg" id="dr" onclick="smena_img(3,3)" alt="Пластиковая балконная дверь"></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;vertical-align: top;"><div id="win_div_2" style="display: block; cursor:pointer;"><img src="/img/stv_gl.jpg" id="w2" onclick="smena_img(1,1)" alt="Пластиковое окно"></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;vertical-align: top;"><div id="win_div_3" style="display: block; cursor:pointer;"><img src="/img/stv_gl.jpg" id="w3" onclick="smena_img(2,2)" title="" alt="Расчет пластикового окна"></div>
                                    </td>
                                    <td class="td_input"><div class="input_h" id="win_div_h" style="display: block; line-height:10px">Высота<br />окна<br>
                                            <input class="wh" type="text" id="win_height" name="textfield" maxlength="4" value="1500" onkeyup="test_razm()" ></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_bb_w" id="win_1_div_w" style="display: block;">Ширина<br>
                                            <input class="wh" type="text" id="win_1_width" name="textfield" maxlength="4" value="700" onkeyup="test_razm()" ></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_bb_w" id="win_2_div_w" style="display: block;">Ширина<br>
                                            <input class="wh" type="text" id="win_2_width" name="textfield" maxlength="4" value="700" onkeyup="test_razm()" ></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_bb_w" id="win_3_div_w" style="display: block;">Ширина<br>
                                            <input class="wh" type="text" id="win_3_width" name="textfield" maxlength="4" value="700" onkeyup="test_razm()" ></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_w" id="dr_div_w" style="display: none;">Ширина<br>
                                            <input class="wh" type="text" id="dr_width" name="textfield" maxlength="4" value="750" onkeyup="test_razm()" ></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"></td>
                                </tr>
                                </tbody></table>
                            <table cellpadding="0" cellspacing="0" border="0"><tbody>
                                <tr>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="gl_div_1" style="display: none; cursor:pointer;"><img src="/img/fram_1.jpg" id="n1" onclick="smena_img(7,7)" alt="Глухая фрамуга"></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="gl_div_2" style="display: none; cursor:pointer;"><img src="/img/fram_1.jpg" id="n2" onclick="smena_img(8,8)" alt="Фрамужное окно"></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div id="gl_div_3" style="display: none; cursor:pointer;"><img src="/img/fram_1.jpg" id="n3" onclick="smena_img(9,9)" alt="Низ окна"></div></td>
                                    <td class="td_input" style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_h" id="gl_div_h" style="display: none; line-height:10px">Высота<br />низа<br>
                                            <input class="wh" type="text" id="gl_height" name="textfield" maxlength="3" value="500" onkeyup="test_razm()" ></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_w" id="gl_1_div_w" style="display: none;">Ширина<br>
                                            <input class="wh" type="text" id="gl_1_width" name="textfield" maxlength="4" value="900" onkeyup="test_razm()" ></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_w" id="gl_2_div_w" style="display: none;">Ширина<br>
                                            <input class="wh" type="text" id="gl_2_width" name="textfield" maxlength="4" value="900" onkeyup="test_razm()"></div>
                                    </td>
                                    <td style="padding:0; margin:0;letter-spacing: 0em;*letter-spacing: normal;word-spacing: 0em;"><div class="input_w" id="gl_3_div_w" style="display: none;">Ширина<br>
                                            <input class="wh" type="text" id="gl_3_width" name="textfield" maxlength="4" value="900" onkeyup="test_razm()"></div>
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody></table>
                            <div id="allwh_pole">Общие размеры: ш2100 &#215; в1500 мм.</div>
                        </div>
                    </fieldset>
                </form>

            </td>

            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="100%" valign="top">
                <h3>3. ЗАДАЙТЕ ХАРАКТЕРИСТИКИ</h3>
                <form class="box style">
                    <fieldset>
                        <legend>Нажимайте на селекторы, чтобы выбрать опции</legend>
                        <div class:="height">
                            <div align="center">
                                <label for="profil">Профиль:
                                    <select id="profil" style="width: 257px;">
                                        <!-- <option disabled="disabled" value="-0.18">Veka WHS 60мм. Звоните</option> //-->
                                        <option value="0" selected="selected">Veka</option>
                                        <!-- <option value="0" selected="selected">Veka EuroLine Pro</option> //-->
                                        <!-- <option disabled="disabled" value="0.15">Veka SoftLine 70мм. Звоните</option> //-->
                                        <!-- <option disabled="disabled" value="0.7">Veka SoftLine 82мм. Звоните</option> //-->
                                    </select></label>
                            </div>
                            <div align="center">
                                <!-- <label for="prof_color">Цвет (стороны):  //-->
                                <select hidden="" id="prof_color" style="width: 257px;">
                                    <option value="0" selected="selected">Белый/Белый</option>
                                    <option value="0.15">Белый/Цвет</option>
                                    <option value="0.3">Цвет/Цвет</option>
                                </select>
                                <!-- </label> //-->
                            </div>
                            <div align="center">
                                <label for="steklopaket">Стеклопакет:
                                    <select id="steklopaket" style="width: 257px;">
                                        <option value="0" selected="selected">Однокамерный</option>
                                        <option value="0.05">Однокамерный энергосберегающий</option>
                                        <option value="0.2">Двухкамерный</option>
                                        <option value="0.25">Двухкамерный энергосберегающий</option>
                                    </select></label>
                            </div>
                            <div align="center">
                                <select hidden="" id="steklo_tip" style="width: 257px;">
                                    <option value="0" selected="selected">Стандартное</option>
                                    <option value="900">Тонированное</option>
                                    <option value="900">Матовое</option>
                                    <option value="900">Зеркальное</option>
                                    <option value="1500">Защитное +</option>
                                    <option value="2000">Защитное ++</option>
                                    <option value="2500">Защитное +++</option>
                                </select>
                            </div>
                            <div align="center">
                                <label for="podokonnik">Подоконник:
                                    <select id="podokonnik" style="width: 257px;">
                                        <option value="0" selected="selected">Нет</option>
                                        <option value="180">Пластик: до 100 мм.</option>
                                        <option value="240">Пластик: 101-200 мм.</option>
                                        <option value="330">Пластик: 201-300 мм.</option>
                                        <option value="440">Пластик: 301-400 мм.</option>
                                        <option value="540">Пластик: 401-500 мм.</option>
                                        <option value="930">Пластик: 501-600 мм.</option>
                                        <option value="1120">Пластик: 601-700 мм.</option>
                                    </select></label>
                            </div>
                            <!--<div align="right">
                            <label for="moskitnaya">Москитная сетка:
                            <select id="moskitnaya">
                            <option value="0" selected="selected">Нет</option>
                            <option value="650">Да</option>
                            </select></label>
                            </div>  //-->
                            <div align="center">
                                <label for="moskitnaya">Москитная сетка:
                                    <input style="width:38px;" type="checkbox" id="moskitnaya">
                                </label>
                            </div>

                            <div align="center">
                                <label for="vodootliv">Водоотлив:
                                    <input style="width:38px;" type="checkbox" id="vodootliv">
                                </label>
                            </div>
                            <div align="center">
                                <label for="montazh">Монтаж:
                                    <select id="montazh" style="width: 257px;">
                                        <option value="0" selected="selected">Нет</option>
                                        <option value="2">В панельном доме</option>
                                        <!--<option value="2">В деревянном доме</option>  //-->
                                        <!--<option value="1">В корабле</option> //-->
                                        <option value="3">В кирпичном доме</option>
                                        <option value="4">В старом фонде</option>
                                        <!--<option value="1">Балкон или лоджия</option>  //-->
                                    </select></label>
                            </div>
                            <div align="center">
                                <label for="otkosi">Откосы:
                                    <select id="otkosi" style="width: 257px;">
                                        <option value="0" selected="selected">Нет</option>
                                        <option value="1">Сэндвич-панель</option>
                                    </select></label>
                            </div>
                            <div align="center">
                                <label for="count">Количество:
                                    <input id="count" type="text" value="1" style="width:35px;">
                                </label>
                            </div>
                            <div align="center">
                                <label for="dostavka">Доставка:
                                    <select id="dostavka" style="width: 257px;">
                                        <option value="0" selected="selected">Нет</option>
                                        <option value="1180">В черте города</option>
                                        <option value="1400">За город. До 40 км.</option>
                                        <option value="1800">За город. До 60 км.</option>
                                        <option value="2200">За город. До 80 км.</option>
                                        <option disabled="disabled"  value="">Более 80 км. - Звоните.</option>
                                    </select></label>
                            </div>
                            <div class="box-info" id="pole_info">Нажмите кнопку "Рассчитать"</div>

                            <div align="center" style="width:100%">
                                <div style="width:300px; float:none; font-size:32px" class="box-content" id="new_price"></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div align="center" style="padding: 4px 4px 4px 4px; height:40px;">
                    <a class="btn button-primary" style="cursor:pointer" onclick="test(); return true;">Рассчитать</a>

                    <!-- 	<a class="button-primary" style="cursor:pointer" onclick="remember()">Заказать / Добавить</a>

                        <a class="button-primary" style="cursor:pointer" onclick="remember_sbros()">Сброс</a>  -->
                </div><br />
            </td>
        </tr>

    </table><p>Точность расчета калькулятора составляет 90-95%, более точные расчеты Вы можете произвести по телефону.
        При заказе изделий без монтажа, ориентируйтесь на зачеркнутую цену или уточняйте по телефону.</p>
    <div class="center">
    </div>
    <!-- end- -->
@endsection
