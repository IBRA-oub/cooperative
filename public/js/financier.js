document.addEventListener("DOMContentLoaded", function () {

    function traduireEnArabe1() {
        localStorage.setItem("langueF", "arabicF");

        // _________________sidebar________________
        if (document.getElementById("statistique")) {
            document.getElementById("statistique").textContent = "الملف الشخصي/الإحصائيات";
        }

        if (document.getElementById("statistique1")) {
            document.getElementById("statistique1").textContent = "الملف الشخصي/الإحصائيات";
        }
        if (document.getElementById("revenu")) {
            document.getElementById("revenu").textContent = "الإنتاج";
        }

        if (document.getElementById("revenu1")) {
            document.getElementById("revenu1").textContent = "الإنتاج";
        }

        if (document.getElementById("charge")) {
            document.getElementById("charge").textContent = "مصارف";
        }
        if (document.getElementById("charge1")) {
            document.getElementById("charge1").textContent = "مصارف";
        }

        if (document.getElementById("message")) {
            document.getElementById("message").textContent = "الرسائل";
        }

        if (document.getElementById("message1")) {
            document.getElementById("message1").textContent = "الرسائل";
        }

        if (document.getElementById("logout")) {
            document.getElementById("logout").textContent = "تسجيل الخروج";
        }

        // _______________________revenu page________________

        if (document.getElementById("table1")) {
            document.getElementById("table1").classList.remove("ltr");

            document.getElementById("table1").classList.add("rtl");
        }

        if (document.getElementById("addProRev")) {
            document.getElementById("addProRev").textContent =
                " إضافة المنتج ذو الدخل";
        }

        if (document.getElementById("id")) {
            document.getElementById("id").textContent = "معرف";
        }

        if (document.getElementById("NomPro")) {
            document.getElementById("NomPro").textContent = "اسم المنتج";
        }

        if (document.getElementById("quantiter")) {
            document.getElementById("quantiter").textContent = "الكمية";
        }

        if (document.getElementById("prix")) {
            document.getElementById("prix").textContent = "سعر البيع";
        }

        if (document.getElementById("dateRev")) {
            document.getElementById("dateRev").textContent = " تاريخ البيع";
        }

        if (document.getElementById("Action")) {
            document.getElementById("Action").textContent =
                "  المزيد من الخيارات";
        }

        // ________________________add produit revenu _______________

        if (document.getElementById("addProRevenu")) {
            document.getElementById("addProRevenu").textContent =
                "إضافة المنتج ";
            document.getElementById("addProRevenu").classList.add("text-center");
        }

        if (document.getElementById("NomProAdd")) {
            document.getElementById("NomProAdd").textContent = "  اسم المنتج";
            document.getElementById("NomProAdd").classList.add("text-right");
        }
       
        if (document.getElementById("quntiterAdd")) {
            document.getElementById("quntiterAdd").textContent = "   الكمية";
            document.getElementById("quntiterAdd").classList.add("text-right");
        }

        if (document.getElementById("prixRevenuAdd")) {
            document.getElementById("prixRevenuAdd").textContent =
                "   سعر البيع";
            document
                .getElementById("prixRevenuAdd")
                .classList.add("text-right");
        }

        if (document.getElementById("dateRevenuAdd")) {
            document.getElementById("dateRevenuAdd").textContent =
                "    تاريخ البيع";
            document
                .getElementById("dateRevenuAdd")
                .classList.add("text-right");
        }

        if (document.getElementById("saveAdd")) {
            document.getElementById("saveAdd").textContent = "    حفظ ";
        }

        // ________________________edite produit revenu _______________

        if (document.getElementById("eidteProRevenu")) {
            document.getElementById("eidteProRevenu").textContent =
                "تحديث المنتج ";
            document
                .getElementById("eidteProRevenu")
                .classList.add("text-center");
        }

        if (document.getElementById("nomProEdit")) {
            document.getElementById("nomProEdit").textContent = "  اسم المنتج";
            document.getElementById("nomProEdit").classList.add("text-right");
        }

        if (document.getElementById("quntiterEdite")) {
            document.getElementById("quntiterEdite").textContent = "   الكمية";
            document
                .getElementById("quntiterEdite")
                .classList.add("text-right");
        }

        if (document.getElementById("prixRevenuEdite")) {
            document.getElementById("prixRevenuEdite").textContent =
                "   سعر البيع";
            document
                .getElementById("prixRevenuEdite")
                .classList.add("text-right");
        }

        if (document.getElementById("dateEdite")) {
            document.getElementById("dateEdite").textContent =
                "    تاريخ البيع";
            document.getElementById("dateEdite").classList.add("text-right");
        }

        if (document.getElementById("saveEdite")) {
            document.getElementById("saveEdite").textContent = "    حفظ ";
        }

        // _______________________charge pages________________

        if (document.getElementById("addProAch")) {
            document.getElementById("addProAch").textContent =
                "إضافة";
        }

        if (document.getElementById("idA")) {
            document.getElementById("idA").textContent = "معرف";
        }
        if (document.getElementById("NomElectriciterEau")) {
            document.getElementById("NomElectriciterEau").textContent = "الكهرباء / الماء";
        }

        if (document.getElementById("NomProAch")) {
            document.getElementById("NomProAch").textContent = "اسم ";
        }

        if (document.getElementById("quantiterAch")) {
            document.getElementById("quantiterAch").textContent = "الكمية";
        }

        if (document.getElementById("prixAch")) {
            document.getElementById("prixAch").textContent = " سعر ";
        }

        if (document.getElementById("dateAch")) {
            document.getElementById("dateAch").textContent = "  تاريخ ";
        }

        if (document.getElementById("actionsAch")) {
            document.getElementById("actionsAch").textContent =
                "  المزيد من الخيارات";
        }

        // _______________________add produit achat___________________

        if (document.getElementById("addProdAchat")) {
            document.getElementById("addProdAchat").textContent =
                "إضافة رسوم مواد ";
            document.getElementById("addProdAchat").classList.add("text-center");
        }
        if (document.getElementById("addMate")) {
            document.getElementById("addMate").textContent =
                "إضافة رسوم معدات ";
            document.getElementById("addMate").classList.add("text-center");
        }
        if (document.getElementById("addEleEau")) {
            document.getElementById("addEleEau").textContent =
                " إضافة رسوم كهرباء/ماء ";
            document.getElementById("addEleEau").classList.add("text-center");
        }
        if (document.getElementById("addLoc")) {
            document.getElementById("addLoc").textContent =
                " إضافة رسوم الإيجار ";
            document.getElementById("addLoc").classList.add("text-center");
        }

        if (document.getElementById("nomProAch")) {
            document.getElementById("nomProAch").textContent = "اسم  ";
            document.getElementById("nomProAch").classList.add("text-right");
        }

        if (document.getElementById("qunatiterAch")) {
            document.getElementById("qunatiterAch").textContent = " الكمية";
            document.getElementById("qunatiterAch").classList.add("text-right");
        }

        if (document.getElementById("prixAchat")) {
            document.getElementById("prixAchat").textContent = "سعر ";
            document.getElementById("prixAchat").classList.add("text-right");
        }

        if (document.getElementById("dateAchat")) {
            document.getElementById("dateAchat").textContent = " تاريخ  ";
            document.getElementById("dateAchat").classList.add("text-right");
        }

        if (document.getElementById("saveAchat")) {
            document.getElementById("saveAchat").textContent = "حفظ ";
        }

        // _______________________Edite produit achat___________________

        if (document.getElementById("EditeProAchat")) {
            document.getElementById("EditeProAchat").textContent =
                "تحديث  رسوم مواد";
            document
                .getElementById("EditeProAchat")
                .classList.add("text-center");
        }

        if (document.getElementById("EditeMAter")) {
            document.getElementById("EditeMAter").textContent =
                "تحديث  رسوم معدات";
            document
                .getElementById("EditeMAter")
                .classList.add("text-center");
        }
        if (document.getElementById("editeElecEau")) {
            document.getElementById("editeElecEau").textContent =
                "تحديث  رسوم كهرباء/ماء";
            document
                .getElementById("editeElecEau")
                .classList.add("text-center");
        }
        if (document.getElementById("editeLocation")) {
            document.getElementById("editeLocation").textContent =
                "تحديث  رسوم الإيجار";
            document
                .getElementById("editeLocation")
                .classList.add("text-center");
        }

        if (document.getElementById("nomProAchEdi")) {
            document.getElementById("nomProAchEdi").textContent = "اسم  ";
            document.getElementById("nomProAchEdi").classList.add("text-right");
        }

        if (document.getElementById("quantiterAchEdi")) {
            document.getElementById("quantiterAchEdi").textContent = " الكمية";
            document
                .getElementById("quantiterAchEdi")
                .classList.add("text-right");
        }

        if (document.getElementById("prixAchaEdit")) {
            document.getElementById("prixAchaEdit").textContent = "سعر ";
            document.getElementById("prixAchaEdit").classList.add("text-right");
        }

        if (document.getElementById("dateAchatEdit")) {
            document.getElementById("dateAchatEdit").textContent =
                "التاريخ";
            document
                .getElementById("dateAchatEdit")
                .classList.add("text-right");
        }

        if (document.getElementById("saveEditAchat")) {
            document.getElementById("saveEditAchat").textContent = "حفظ ";
        }

        // ________________charge page______________
        if (document.getElementById("materiel")) {
            document.getElementById("materiel").textContent = "معدات ";
        }
        if (document.getElementById("ElectriciterEau")) {
            document.getElementById("ElectriciterEau").innerHTML = "الكهرباء<br/>الماء";
        }
        if (document.getElementById("Location")) {
            document.getElementById("Location").textContent = "الإيجار ";
        }
        if (document.getElementById("materiaux")) {
            document.getElementById("materiaux").textContent = "مواد ";
        }
        // ____________________count_________________
        if (document.getElementById("totaleProduit")) {
            document.getElementById("totaleProduit").textContent = "إجمالي المنتجات ";
        }
        if (document.getElementById("prixTotalPRod")) {
            document.getElementById("prixTotalPRod").textContent = "السعر الإجمالي للمنتجات  ";
        }
        if (document.getElementById("totaleCharge")) {
            document.getElementById("totaleCharge").textContent = "المجموع الكلي للنفقات    ";
        }
        if (document.getElementById("prixTotaleCharge")) {
            document.getElementById("prixTotaleCharge").textContent = " السعر الإجمالي للنفقات   ";
        }
    }
  

    function reinitialiserTexte1() {
        localStorage.setItem("langueF", "francaisF");

        // _________________sidebar________________
        if (document.getElementById("statistique")) {
            document.getElementById("statistique").textContent = "Profile/Statistique";
        }

        if (document.getElementById("statistique1")) {
            document.getElementById("statistique1").textContent = "Profile/Statistique";
        }
        if (document.getElementById("revenu")) {
            document.getElementById("revenu").textContent = "Produit";
        }

        if (document.getElementById("revenu1")) {
            document.getElementById("revenu1").textContent = "Produit";
        }

        if (document.getElementById("charge")) {
            document.getElementById("charge").textContent = "Charge";
        }
        if (document.getElementById("charge1")) {
            document.getElementById("charge1").textContent = "Charge";
        }

        if (document.getElementById("message")) {
            document.getElementById("message").textContent = "Message";
        }

        if (document.getElementById("message1")) {
            document.getElementById("message1").textContent = "Message";
        }

        if (document.getElementById("logout")) {
            document.getElementById("logout").textContent = " Log out";
        }

        // _______________________revenu page________________

        if (document.getElementById("table1")) {
            document.getElementById("table1").classList.add("ltr");

            document.getElementById("table1").classList.remove("rtl");
        }

        if (document.getElementById("addProRev")) {
            document.getElementById("addProRev").textContent =
                "add produit revenu";
        }

        if (document.getElementById("id")) {
            document.getElementById("id").textContent = "id";
        }

        if (document.getElementById("NomPro")) {
            document.getElementById("NomPro").textContent = "nom  ";
        }

        if (document.getElementById("quantiter")) {
            document.getElementById("quantiter").textContent = "quantiter";
        }

        if (document.getElementById("prix")) {
            document.getElementById("prix").textContent = " prix de vendre";
        }

        if (document.getElementById("dateRev")) {
            document.getElementById("dateRev").textContent = "date de vendre";
        }

        if (document.getElementById("Action")) {
            document.getElementById("Action").textContent = "plus options";
        }

        // _______________________add produit revenu___________________

        if (document.getElementById("addProRevenu")) {
            document.getElementById("addProRevenu").textContent =
                "  Ajout produit venter";
            document
                .getElementById("addProRevenu")
                .classList.remove("text-right");
        }

        if (document.getElementById("NomProAdd")) {
            document.getElementById("NomProAdd").textContent = "nom  ";
            document.getElementById("NomProAdd").classList.remove("text-right");
        }

        if (document.getElementById("quntiterAdd")) {
            document.getElementById("quntiterAdd").textContent = " Quantiter";
            document
                .getElementById("quntiterAdd")
                .classList.remove("text-right");
        }

        if (document.getElementById("prixRevenuAdd")) {
            document.getElementById("prixRevenuAdd").textContent =
                "Prix de vente";
            document
                .getElementById("prixRevenuAdd")
                .classList.remove("text-right");
        }

        if (document.getElementById("dateRevenuAdd")) {
            document.getElementById("dateRevenuAdd").textContent = " Date ";
            document
                .getElementById("dateRevenuAdd")
                .classList.remove("text-right");
        }

        if (document.getElementById("saveAdd")) {
            document.getElementById("saveAdd").textContent = "save ";
        }

        // ________________________edite revenu__________________

        if (document.getElementById("eidteProRevenu")) {
            document.getElementById("eidteProRevenu").textContent =
                "  Edite produit venter";
            document
                .getElementById("eidteProRevenu")
                .classList.remove("text-right");
        }

        if (document.getElementById("nomProEdit")) {
            document.getElementById("nomProEdit").textContent = "nom  ";
            document
                .getElementById("nomProEdit")
                .classList.remove("text-right");
        }

        if (document.getElementById("quntiterEdite")) {
            document.getElementById("quntiterEdite").textContent = " Quantiter";
            document
                .getElementById("quntiterEdite")
                .classList.remove("text-right");
        }

        if (document.getElementById("prixRevenuEdite")) {
            document.getElementById("prixRevenuEdite").textContent =
                "Prix de vente";
            document
                .getElementById("prixRevenuEdite")
                .classList.remove("text-right");
        }

        if (document.getElementById("dateEdite")) {
            document.getElementById("dateEdite").textContent = " Date ";
            document.getElementById("dateEdite").classList.remove("text-right");
        }

        if (document.getElementById("saveEdite")) {
            document.getElementById("saveEdite").textContent = "save ";
        }

        // _______________________achat page________________

        if (document.getElementById("addProAch")) {
            document.getElementById("addProAch").textContent =
                "   ajouter";
        }

        if (document.getElementById("idA")) {
            document.getElementById("idA").textContent = "ID";
        }
        if (document.getElementById("NomElectriciterEau")) {
            document.getElementById("NomElectriciterEau").textContent = " electriciter/eau";
        }

        if (document.getElementById("NomProAch")) {
            document.getElementById("NomProAch").textContent = " nom";
        }

        if (document.getElementById("quantiterAch")) {
            document.getElementById("quantiterAch").textContent = "Quantiter";
        }

        if (document.getElementById("prixAch")) {
            document.getElementById("prixAch").textContent = "prix";
        }

        if (document.getElementById("dateAch")) {
            document.getElementById("dateAch").textContent = "date";
        }

        if (document.getElementById("actionsAch")) {
            document.getElementById("actionsAch").textContent = " plus options";
        }

        // _______________________add produit achat___________________

        if (document.getElementById("addProdAchat")) {
            document.getElementById("addProdAchat").textContent =
                "  Ajouter les charges de Materiaux";
          
        }
        if (document.getElementById("addMate")) {
            document.getElementById("addMate").textContent =
                " Ajouter les charges de Materiel ";
        }
        if (document.getElementById("addEleEau")) {
            document.getElementById("addEleEau").textContent =
                " Ajouter les charges de Electriciter/Eau ";
        }

        if (document.getElementById("addLoc")) {
            document.getElementById("addLoc").textContent =
                "   Ajouter  les charges de Location ";
        }

        if (document.getElementById("nomProAch")) {
            document.getElementById("nomProAch").textContent = "nom  ";
            document.getElementById("nomProAch").classList.remove("text-right");
        }

        if (document.getElementById("qunatiterAch")) {
            document.getElementById("qunatiterAch").textContent = " Quantiter";
            document
                .getElementById("qunatiterAch")
                .classList.remove("text-right");
        }

        if (document.getElementById("prixAchat")) {
            document.getElementById("prixAchat").textContent = "Prix";
            document.getElementById("prixAchat").classList.remove("text-right");
        }

        if (document.getElementById("dateAchat")) {
            document.getElementById("dateAchat").textContent = " Date ";
            document.getElementById("dateAchat").classList.remove("text-right");
        }

        if (document.getElementById("saveAchat")) {
            document.getElementById("saveAchat").textContent = "save ";
        }

        // _______________________Edite produit achat___________________

        if (document.getElementById("EditeProAchat")) {
            document.getElementById("EditeProAchat").textContent =
                "Edit les charges de materiaux";

        }
        if (document.getElementById("EditeMAter")) {
            document.getElementById("EditeMAter").textContent =
                " Edit les charges de materiel  ";
            document
                .getElementById("EditeMAter")
                .classList.add("text-center");
        }

        if (document.getElementById("editeElecEau")) {
            document.getElementById("editeElecEau").textContent =
                "Edit les charge Electriciter/Eau";
           
        }
        if (document.getElementById("editeLocation")) {
            document.getElementById("editeLocation").textContent =
                "   Edit les charges  Location";
           
        }

        if (document.getElementById("nomProAchEdi")) {
            document.getElementById("nomProAchEdi").textContent = "nom";
            document
                .getElementById("nomProAchEdi")
                .classList.remove("text-right");
        }

        if (document.getElementById("quantiterAchEdi")) {
            document.getElementById("quantiterAchEdi").textContent =
                " Quantiter";
            document
                .getElementById("quantiterAchEdi")
                .classList.remove("text-right");
        }

        if (document.getElementById("prixAchaEdit")) {
            document.getElementById("prixAchaEdit").textContent =
                "Prix";
            document
                .getElementById("prixAchaEdit")
                .classList.remove("text-right");
        }

        if (document.getElementById("dateAchatEdit")) {
            document.getElementById("dateAchatEdit").textContent = "Date";
            document
                .getElementById("dateAchatEdit")
                .classList.remove("text-right");
        }

        if (document.getElementById("saveEditAchat")) {
            document.getElementById("saveEditAchat").textContent = "save ";
        }
        // ____________________________charge____________________
        if (document.getElementById("materiel")) {
            document.getElementById("materiel").textContent = "Materiel ";
        }
        if (document.getElementById("ElectriciterEau")) {
            document.getElementById("ElectriciterEau").innerHTML = "Electriciter<br/>eau";

        }
        if (document.getElementById("Location")) {
            document.getElementById("Location").textContent = "Location ";
        }
        if (document.getElementById("materiaux")) {
            document.getElementById("materiaux").textContent = "Materiaux ";
        }
         // ____________________count_________________
         if (document.getElementById("totaleProduit")) {
            document.getElementById("totaleProduit").textContent = " Totale des produit ";
        }
        if (document.getElementById("prixTotalPRod")) {
            document.getElementById("prixTotalPRod").textContent = "  Prix totale des produit  ";
        }
        if (document.getElementById("totaleCharge")) {
            document.getElementById("totaleCharge").textContent = "  Totale des chagre    ";
        }
        if (document.getElementById("prixTotaleCharge")) {
            document.getElementById("prixTotaleCharge").textContent = "   Prix totale des Charge   ";
        }
    }

    document.getElementById("arabicF").addEventListener("click", function () {
        traduireEnArabe1();

        document.getElementById("labelarbicF").classList.add("hidden");

        console.log("fgh");

        document.getElementById("labelFranceF").classList.remove("hidden");
    });

    document.getElementById("francaisF").addEventListener("click", function () {
        reinitialiserTexte1();

        document.getElementById("labelFranceF").classList.add("hidden");

        document.getElementById("labelarbicF").classList.remove("hidden");
    });

    const langueSelectionnee = localStorage.getItem("langueF");
    if (langueSelectionnee === "arabicF") {
        document.getElementById("arabicF").click();
    } else if (langueSelectionnee === "francaisF") {
        document.getElementById("francaisF").click();
    }
});
