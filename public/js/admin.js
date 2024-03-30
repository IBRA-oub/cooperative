// ______________________________________traduction admin________________

document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.getElementById("checkbox1");

    function traduireEnArabe1() {
        localStorage.setItem("langue", "arabic");

        if (document.getElementById("statistique")) {
            document.getElementById("statistique").textContent = "إحصائيات";
        }

        if (document.getElementById("Travailleur")) {
            document.getElementById("Travailleur").textContent = "عمال";
        }

        if (document.getElementById("Message")) {
            document.getElementById("Message").textContent = "الرسائل";
        }

        if (document.getElementById("statistique1")) {
            document.getElementById("statistique1").textContent = "إحصائيات";
        }
        if (document.getElementById("Travailleur1")) {
            document.getElementById("Travailleur1").textContent = "عمال";
        }

        if (document.getElementById("Message1")) {
            document.getElementById("Message1").textContent = "الرسائل";
        }

        document.getElementById("logout").textContent = "تسجيل الخروج";

        // __________________add user____________________

        if (document.getElementById("addUser")) {
            document.getElementById("addUser").textContent = "إضافة عامل";
        }

        if (document.getElementById("FL")) {
            document.getElementById("FL").textContent = "الاسم الكامل";
            document.getElementById("FL").classList.add("text-right");
        }

        if (document.getElementById("EM")) {
            document.getElementById("EM").textContent = "البريد الإلكتروني";
            document.getElementById("EM").classList.add("text-right");
        }

        if (document.getElementById("PS")) {
            document.getElementById("PS").textContent = "كلمة المرور";
            document.getElementById("PS").classList.add("text-right");
        }

        if (document.getElementById("SL")) {
            document.getElementById("SL").textContent = "الراتب / الساعة";
            document.getElementById("SL").classList.add("text-right");
        }

        if (document.getElementById("pic")) {
            document.getElementById("pic").textContent = " الصورة";
            document.getElementById("pic").classList.add("text-right");
        }

        if (document.getElementById("sv")) {
            document.getElementById("sv").textContent = " حفظ";
            document.getElementById("sv").classList.add("text-right");
        }

        // _________________all user_____________________

        if (document.getElementById("table1")) {
            document.getElementById("table1").classList.add("rtl");

            document.getElementById("table1").classList.remove("ltr");
        }

        if (document.getElementById("addU")) {
            document.getElementById("addU").textContent = "إضافة عامل";
        }

        if (document.getElementById("id")) {
            document.getElementById("id").textContent = " معرف";
        }

        if (document.getElementById("fulN")) {
            document.getElementById("fulN").textContent = " الاسم الكامل";
        }

        if (document.getElementById("Ema")) {
            document.getElementById("Ema").textContent = " البريد الإلكتروني";
        }

        if (document.getElementById("s/l")) {
            document.getElementById("s/l").textContent = " الراتب / الساعة";
        }

        if (document.getElementById("HR/j")) {
            document.getElementById("HR/j").textContent = "ساعات العمل / يوم";
        }

        if (document.getElementById("RL")) {
            document.getElementById("RL").textContent = " الدور";
        }
        if (document.getElementById("AC")) {
            document.getElementById("AC").textContent = " خيارات إضافية";
        }
        if (document.getElementById("sup")) {
            document.getElementById("sup").textContent = "  حذف";
        }
        if (document.getElementById("edi")) {
            document.getElementById("edi").textContent = "  تعديل";
        }
        if (document.getElementById("addH")) {
            document.getElementById("addH").textContent = "  إضافة ساعات ";
        }
        if (document.getElementById("AllH")) {
            document.getElementById("AllH").textContent = "  كل الساعات";
        }

        // __________________forme add hours_________________
        if (document.getElementById("HTJ")) {
            document.getElementById("HTJ").textContent = "  ساعات العمل اليوم ";
            document.getElementById("HTJ").classList.add("text-center");
        }
        if (document.getElementById("svHtj")) {
            document.getElementById("svHtj").textContent = "  حفظ";
        }

        // __________________________edite user_________________

        if (document.getElementById("EditeUSer")) {
            document.getElementById("EditeUSer").textContent =
                " تعديل بيانات المستخدم";
        }

        if (document.getElementById("FLE")) {
            document.getElementById("FLE").textContent = "الاسم الكامل";
            document.getElementById("FLE").classList.add("text-right");
        }

        if (document.getElementById("EME")) {
            document.getElementById("EME").textContent = "البريد الإلكتروني";
            document.getElementById("EME").classList.add("text-right");
        }

        if (document.getElementById("PSE")) {
            document.getElementById("PSE").textContent = "كلمة المرور";
            document.getElementById("PSE").classList.add("text-right");
        }

        if (document.getElementById("SLE")) {
            document.getElementById("SLE").textContent = "الراتب / الساعة";
            document.getElementById("SLE").classList.add("text-right");
        }

        if (document.getElementById("picE")) {
            document.getElementById("picE").textContent = " الصورة";
            document.getElementById("picE").classList.add("text-right");
        }

        if (document.getElementById("svE")) {
            document.getElementById("svE").textContent = " حفظ";
            document.getElementById("svE").classList.add("text-right");
        }

        // ____________________travailleur heure_______________
        if (document.getElementById("idTH")) {
            document.getElementById("idTH").textContent = "معرف";
        }
        if (document.getElementById("fnTH")) {
            document.getElementById("fnTH").textContent = " الاسم الكامل";
        }
        if (document.getElementById("hTH")) {
            document.getElementById("hTH").textContent = "ساعات";
        }
        if (document.getElementById("jTH")) {
            document.getElementById("jTH").textContent = "يوم";
        }
    }

    function reinitialiserTexte1() {
        localStorage.setItem("langue", "francais");

        if (document.getElementById("statistique")) {
            document.getElementById("statistique").textContent = "Statistique";
        }
        if (document.getElementById("Travailleur")) {
            document.getElementById("Travailleur").textContent = "Travailleur";
        }

        if (document.getElementById("Message")) {
            document.getElementById("Message").textContent = "Message";
        }

        if (document.getElementById("statistique1")) {
            document.getElementById("statistique1").textContent = "Statistique";
        }

        if (document.getElementById("Travailleur1")) {
            document.getElementById("Travailleur1").textContent = "Travailleur";
        }

        if (document.getElementById("Message1")) {
            document.getElementById("Message1").textContent = "Message";
        }

        document.getElementById("logout").textContent = "logout";

        // __________________add user____________________
        if (document.getElementById("addUser")) {
            document.getElementById("addUser").textContent =
                "Ajout Travailleur";
        }
        if (document.getElementById("FL")) {
            document.getElementById("FL").textContent = "fullName";
            document.getElementById("FL").classList.remove("text-right");
        }

        if (document.getElementById("EM")) {
            document.getElementById("EM").textContent = "Email";
            document.getElementById("EM").classList.remove("text-right");
        }

        if (document.getElementById("PS")) {
            document.getElementById("PS").textContent = "Password";
            document.getElementById("PS").classList.remove("text-right");
        }

        if (document.getElementById("SL")) {
            document.getElementById("SL").textContent = "Salaire/Heure";
            document.getElementById("SL").classList.remove("text-right");
        }

        if (document.getElementById("pic")) {
            document.getElementById("pic").textContent = "picture";
            document.getElementById("pic").classList.remove("text-right");
        }

        if (document.getElementById("sv")) {
            document.getElementById("sv").textContent = "save";
            document.getElementById("sv").classList.remove("text-right");
        }

        // _________________________all user__________________________

        if (document.getElementById("table1")) {
            document.getElementById("table1").classList.remove("rtl");

            document.getElementById("table1").classList.add("ltr");
        }

        if (document.getElementById("addU")) {
            document.getElementById("addU").textContent = " add user";
        }

        if (document.getElementById("id")) {
            document.getElementById("id").textContent = " id";
        }

        if (document.getElementById("fulN")) {
            document.getElementById("fulN").textContent = " fullName";
        }

        if (document.getElementById("Ema")) {
            document.getElementById("Ema").textContent = " email";
        }

        if (document.getElementById("s/l")) {
            document.getElementById("s/l").textContent = " Salaire/heure";
        }

        if (document.getElementById("HR/j")) {
            document.getElementById("HR/j").textContent =
                " heure Taravailler/j";
        }

        if (document.getElementById("RL")) {
            document.getElementById("RL").textContent = " role";
        }
        if (document.getElementById("AC")) {
            document.getElementById("AC").textContent = " Actions";
        }

        if (document.getElementById("sup")) {
            document.getElementById("sup").textContent = "  supprimer";
        }
        if (document.getElementById("edi")) {
            document.getElementById("edi").textContent = "  edite";
        }
        if (document.getElementById("addH")) {
            document.getElementById("addH").textContent = "   add hours ";
        }
        if (document.getElementById("AllH")) {
            document.getElementById("AllH").textContent = "  all hours ";
        }

        // _______________________forme add hours ________________

        if (document.getElementById("HTJ")) {
            document.getElementById("HTJ").textContent =
                "  Heure travailler aujourd'hui ";
            document.getElementById("HTJ").classList.remove("text-center");
        }
        if (document.getElementById("svHtj")) {
            document.getElementById("svHtj").textContent = "  save";
        }

        // _______________________edite user ________________

        if (document.getElementById("EditeUSer")) {
            document.getElementById("EditeUSer").textContent =
                "Edite Travailleur";
        }
        if (document.getElementById("FLE")) {
            document.getElementById("FLE").textContent = "fullName";
            document.getElementById("FLE").classList.remove("text-right");
        }

        if (document.getElementById("EME")) {
            document.getElementById("EME").textContent = "Email";
            document.getElementById("EME").classList.remove("text-right");
        }

        if (document.getElementById("PSE")) {
            document.getElementById("PSE").textContent = "Password";
            document.getElementById("PSE").classList.remove("text-right");
        }

        if (document.getElementById("SLE")) {
            document.getElementById("SLE").textContent = "Salaire/Heure";
            document.getElementById("SLE").classList.remove("text-right");
        }

        if (document.getElementById("picE")) {
            document.getElementById("picE").textContent = "picture";
            document.getElementById("picE").classList.remove("text-right");
        }

        if (document.getElementById("svE")) {
            document.getElementById("svE").textContent = "save";
            document.getElementById("svE").classList.remove("text-right");
        }

        // ____________________travailleur heure_______________
        if (document.getElementById("idTH")) {
            document.getElementById("idTH").textContent = "ID";
        }
        if (document.getElementById("fnTH")) {
            document.getElementById("fnTH").textContent = "fullName";
        }
        if (document.getElementById("hTH")) {
            document.getElementById("hTH").textContent = "heurs";
        }
        if (document.getElementById("jTH")) {
            document.getElementById("jTH").textContent = "jour";
        }
    }

    document.getElementById("arabic").addEventListener("click", function () {
        traduireEnArabe1();

        document.getElementById("labelarbic").classList.add("hidden");

        console.log("fgh");

        document.getElementById("labelFrance").classList.remove("hidden");
    });

    document.getElementById("francais").addEventListener("click", function () {
        reinitialiserTexte1();

        document.getElementById("labelFrance").classList.add("hidden");

        document.getElementById("labelarbic").classList.remove("hidden");
    });

    const langueSelectionnee = localStorage.getItem("langue");
    if (langueSelectionnee === "arabic") {
        document.getElementById("arabic").click();
    } else if (langueSelectionnee === "francais") {
        document.getElementById("francais").click();
    }
});
