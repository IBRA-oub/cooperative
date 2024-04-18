document.addEventListener("DOMContentLoaded", function () {
    function traduireEnArabe1() {
        localStorage.setItem("langueP", "arabicP");

        // ____________________sidebar______________

        if (document.getElementById("info/stat")) {
            document.getElementById("info/stat").textContent =
                "معلومات / إحصائيات";
        }

        if (document.getElementById("info/stat1")) {
            document.getElementById("info/stat1").textContent =
                "معلومات / إحصائيات";
        }
        if (document.getElementById("dashboard")) {
            document.getElementById("dashboard").textContent = "لوحة التحكم";
        }

        if (document.getElementById("dashboard1")) {
            document.getElementById("dashboard1").textContent = "لوحة التحكم";
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

        // __________________periode________________

        if (document.getElementById("periode")) {
            document.getElementById("periode").textContent = ":الفترة";
            document.getElementById("periode").classList.remove("ltr");
            document.getElementById("periode").classList.add("rtl");
        }

        if (document.getElementById("dateDebut")) {
            document.getElementById("dateDebut").textContent = "تاريخ البدء";
        }

        if (document.getElementById("dateFinir")) {
            document.getElementById("dateFinir").textContent =
                "تاريخ الانتهاء ";
        }

        // ___________________add periode_________________

        if (document.getElementById("addPeriode")) {
            document.getElementById("addPeriode").textContent = "إضافة فترة";
        }

        if (document.getElementById("nomPeriode")) {
            document.getElementById("nomPeriode").textContent = "اسم الفترة";
            document.getElementById("nomPeriode").classList.add("text-right");
        }
        if (document.getElementById("datedb")) {
            document.getElementById("datedb").textContent = "تاريخ البداية";
            document.getElementById("datedb").classList.add("text-right");
        }
        if (document.getElementById("dateFN")) {
            document.getElementById("dateFN").textContent = "تاريخ الانتهاء";
            document.getElementById("dateFN").classList.add("text-right");
        }
        if (document.getElementById("SVPer")) {
            document.getElementById("SVPer").textContent = "حفظ";
        }

          // _____________________edite periode________________

          if (document.getElementById("editPeriode")) {
            document.getElementById("editPeriode").textContent =
                "تعديل فترة ";
        }

        if (document.getElementById("NomPeriode")) {
            document.getElementById("NomPeriode").textContent =
                "اسم الفترة ";
            document
                .getElementById("NomPeriode")
                .classList.add("text-right");
        }
        if (document.getElementById("dateDebutEdit")) {
            document.getElementById("dateDebutEdit").textContent = "تاريخ البداية";
            document.getElementById("dateDebutEdit").classList.add("text-right");
        }
        if (document.getElementById("dateFinirEdite")) {
            document.getElementById("dateFinirEdite").textContent = "تاريخ الانتهاء";
            document.getElementById("dateFinirEdite").classList.add("text-right");
        }
        if (document.getElementById("saveEdit")) {
            document.getElementById("saveEdit").textContent = "حفظ";
        }
        // ______________________produit planter_______________

        if (document.getElementById("tablePro")) {
            document.getElementById("tablePro").classList.remove("ltr");

            document.getElementById("tablePro").classList.add("rtl");
        }

        if (document.getElementById("addProADD")) {
            document.getElementById("addProADD").textContent = "إضافة منتج";
        }

        if (document.getElementById("idADD")) {
            document.getElementById("idADD").textContent = "معرف";
        }

        if (document.getElementById("nomProADD")) {
            document.getElementById("nomProADD").textContent = "اسم المنتج";
        }

        if (document.getElementById("actionsADD")) {
            document.getElementById("actionsADD").textContent =
                "المزيد من الخيارات";
        }

        // _____________________add produit planter______________

        if (document.getElementById("addProPlanADD")) {
            document.getElementById("addProPlanADD").textContent =
                "إضافة منتج للزراعة";
        }

        if (document.getElementById("nomProPlanADD")) {
            document.getElementById("nomProPlanADD").textContent = "اسم المنتج";
            document
                .getElementById("nomProPlanADD")
                .classList.add("text-right");
        }
        if (document.getElementById("periodeProPLanADD")) {
            document.getElementById("periodeProPLanADD").textContent = "الفترة";
            document
                .getElementById("periodeProPLanADD")
                .classList.add("text-right");
        }
        if (document.getElementById("saveProPlanADD")) {
            document.getElementById("saveProPlanADD").textContent = "حفظ";
            document
                .getElementById("saveProPlanADD")
                .classList.add("text-right");
        }

             // ___________________edite produit planter_______________

             if (document.getElementById("editeProduitPlant")) {
                document.getElementById("editeProduitPlant").textContent =
                    "تعديل المنتج";
            }
    
            if (document.getElementById("NomPRoduitPlantEDite")) {
                document.getElementById("NomPRoduitPlantEDite").textContent =
                    "اسم المنتج";
                document
                    .getElementById("NomPRoduitPlantEDite")
                    .classList.add("text-right");
            }
            if (document.getElementById("periodeEdite")) {
                document.getElementById("periodeEdite").textContent =
                    "الفترة";
                document
                    .getElementById("periodeEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("savePrPlaEDite")) {
                document.getElementById("savePrPlaEDite").textContent = "حفظ";
                document
                    .getElementById("savePrPlaEDite")
                    .classList.add("text-right");
            }

        // _________________outils/materaux________________

        if (document.getElementById("tableOM")) {
            document.getElementById("tableOM").classList.remove("ltr");

            document.getElementById("tableOM").classList.add("rtl");
        }

        if (document.getElementById("outilsMaterADD")) {
            document.getElementById("outilsMaterADD").textContent = " إضافة ";
        }

        if (document.getElementById("nomProOutilMAterADD")) {
            document.getElementById("nomProOutilMAterADD").textContent =
                "اسم المنتج";
        }

        if (document.getElementById("outilsMAterADD")) {
            document.getElementById("outilsMAterADD").textContent =
                "مواد/أدوات";
        }

        if (document.getElementById("actionOutilMAterADD")) {
            document.getElementById("actionOutilMAterADD").textContent =
                "المزيد من الخيارات";
        }
          // _____________________add outils/materiaux______________

          if (document.getElementById("addMaOuADD")) {
            document.getElementById("addMaOuADD").textContent =
                "إضافة مواد/أدوات";
        }

        if (document.getElementById("MateOutiADD")) {
            document.getElementById("MateOutiADD").textContent =
                "مواد/أدوات";
            document
                .getElementById("MateOutiADD")
                .classList.add("text-right");
        }
        if (document.getElementById("ProdAdd")) {
            document.getElementById("ProdAdd").textContent =
                "منتج";
            document
                .getElementById("ProdAdd")
                .classList.add("text-right");
        }
        if (document.getElementById("saveOuMAt")) {
            document.getElementById("saveOuMAt").textContent = "حفظ";
            document
                .getElementById("saveOuMAt")
                .classList.add("text-right");
        }

            // _____________________Edite outils/materiaux______________

            if (document.getElementById("EditeModPlan")) {
                document.getElementById("EditeModPlan").textContent =
                    "تعديل المواد/الأدوات";
            }
    
            if (document.getElementById("MaterOutiEdite")) {
                document.getElementById("MaterOutiEdite").textContent =
                    "مواد/أدوات";
                document
                    .getElementById("MaterOutiEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("NomPRoduitEdite")) {
                document.getElementById("NomPRoduitEdite").textContent =
                    "اسم المنتج";
                document
                    .getElementById("NomPRoduitEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("saveMaOutEdit")) {
                document.getElementById("saveMaOutEdit").textContent = "حفظ";
                document
                    .getElementById("saveMaOutEdit")
                    .classList.add("text-right");
            }


    }

























    function reinitialiserTexte1() {
        localStorage.setItem("langueP", "francaisP");

        // ____________________sidebar______________

        if (document.getElementById("info/stat")) {
            document.getElementById("info/stat").textContent =
                "info/Statistique ";
        }

        if (document.getElementById("info/stat1")) {
            document.getElementById("info/stat1").textContent =
                "info/Statistique";
        }
        if (document.getElementById("dashboard")) {
            document.getElementById("dashboard").textContent = "Dashboard";
        }

        if (document.getElementById("dashboard1")) {
            document.getElementById("dashboard1").textContent = "Dashboard";
        }

        if (document.getElementById("message")) {
            document.getElementById("message").textContent = "Message";
        }

        if (document.getElementById("message1")) {
            document.getElementById("message1").textContent = "Message";
        }

        if (document.getElementById("logout")) {
            document.getElementById("logout").textContent = "Log out";
        }

        // __________________periode________________

        if (document.getElementById("periode")) {
            document.getElementById("periode").textContent = "période:";
            document.getElementById("periode").classList.remove("rtl");
            document.getElementById("periode").classList.add("ltr");
        }

        if (document.getElementById("dateDebut")) {
            document.getElementById("dateDebut").textContent = "date début ";
        }

        if (document.getElementById("dateFinir")) {
            document.getElementById("dateFinir").textContent = " date finir ";
        }

        // ___________________add periode_________________

        if (document.getElementById("addPeriode")) {
            document.getElementById("addPeriode").textContent =
                "ajouter une periode ";
        }

        if (document.getElementById("nomPeriode")) {
            document.getElementById("nomPeriode").textContent =
                "nom de periode ";
            document
                .getElementById("nomPeriode")
                .classList.remove("text-right");
        }
        if (document.getElementById("datedb")) {
            document.getElementById("datedb").textContent = "date Début ";
            document.getElementById("datedb").classList.remove("text-right");
        }
        if (document.getElementById("dateFN")) {
            document.getElementById("dateFN").textContent = "date Finir";
            document.getElementById("dateFN").classList.remove("text-right");
        }
        if (document.getElementById("SVPer")) {
            document.getElementById("SVPer").textContent = "Save";
        }

        // _____________________edite periode________________

        if (document.getElementById("editPeriode")) {
            document.getElementById("editPeriode").textContent =
                "Edite une periode ";
        }

        if (document.getElementById("NomPeriode")) {
            document.getElementById("NomPeriode").textContent =
                "nom de periode ";
            document
                .getElementById("NomPeriode")
                .classList.remove("text-right");
        }
        if (document.getElementById("dateDebutEdit")) {
            document.getElementById("dateDebutEdit").textContent = "date Début ";
            document.getElementById("dateDebutEdit").classList.remove("text-right");
        }
        if (document.getElementById("dateFinirEdite")) {
            document.getElementById("dateFinirEdite").textContent = "date Finir";
            document.getElementById("dateFinirEdite").classList.remove("text-right");
        }
        if (document.getElementById("saveEdit")) {
            document.getElementById("saveEdit").textContent = "Save";
        }


        // ______________________produit planter_______________

        if (document.getElementById("tablePro")) {
            document.getElementById("tablePro").classList.remove("rtl");

            document.getElementById("tablePro").classList.add("ltr");
        }

        if (document.getElementById("addProADD")) {
            document.getElementById("addProADD").textContent = " ajouter produit";
        }

        if (document.getElementById("idADD")) {
            document.getElementById("idADD").textContent = "ID";
        }

        if (document.getElementById("nomProADD")) {
            document.getElementById("nomProADD").textContent =
                "nom de produit ";
        }

        if (document.getElementById("actionsADD")) {
            document.getElementById("actionsADD").textContent = "plus options";
        }

        // _____________________add produit planter______________

        if (document.getElementById("addProPlanADD")) {
            document.getElementById("addProPlanADD").textContent =
                "ajouter Produit a planter";
        }

        if (document.getElementById("nomProPlanADD")) {
            document.getElementById("nomProPlanADD").textContent =
                "nom de produit";
            document
                .getElementById("nomProPlanADD")
                .classList.remove("text-right");
        }
        if (document.getElementById("periodeProPLanADD")) {
            document.getElementById("periodeProPLanADD").textContent =
                "periode";
            document
                .getElementById("periodeProPLanADD")
                .classList.remove("text-right");
        }
        if (document.getElementById("saveProPlanADD")) {
            document.getElementById("saveProPlanADD").textContent = "Save";
            document
                .getElementById("saveProPlanADD")
                .classList.remove("text-right");
        }

        // ___________________edite produit planter_______________

        if (document.getElementById("editeProduitPlant")) {
            document.getElementById("editeProduitPlant").textContent =
                "Modifier Produit";
        }

        if (document.getElementById("NomPRoduitPlantEDite")) {
            document.getElementById("NomPRoduitPlantEDite").textContent =
                "nom de produit";
            document
                .getElementById("NomPRoduitPlantEDite")
                .classList.remove("text-right");
        }
        if (document.getElementById("periodeEdite")) {
            document.getElementById("periodeEdite").textContent =
                "periode";
            document
                .getElementById("periodeEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("savePrPlaEDite")) {
            document.getElementById("savePrPlaEDite").textContent = "Save";
            document
                .getElementById("savePrPlaEDite")
                .classList.remove("text-right");
        }


        // _________________outils/materaux________________

        if (document.getElementById("tableOM")) {
            document.getElementById("tableOM").classList.remove("rtl");

            document.getElementById("tableOM").classList.add("ltr");
        }

        if (document.getElementById("outilsMaterADD")) {
            document.getElementById("outilsMaterADD").textContent = " ajouter ";
        }

        if (document.getElementById("nomProOutilMAterADD")) {
            document.getElementById("nomProOutilMAterADD").textContent =
                "Nom produit";
        }

        if (document.getElementById("outilsMAterADD")) {
            document.getElementById("outilsMAterADD").textContent =
                "materiaux/outils";
        }

        if (document.getElementById("actionOutilMAterADD")) {
            document.getElementById("actionOutilMAterADD").textContent =
                "plus options";
        }

        
        // _____________________add outils/materiaux______________

        if (document.getElementById("addMaOuADD")) {
            document.getElementById("addMaOuADD").textContent =
                "ajouter Materiaux/outils";
        }

        if (document.getElementById("MateOutiADD")) {
            document.getElementById("MateOutiADD").textContent =
                "materiux/outils";
            document
                .getElementById("MateOutiADD")
                .classList.remove("text-right");
        }
        if (document.getElementById("ProdAdd")) {
            document.getElementById("ProdAdd").textContent =
                "produit";
            document
                .getElementById("ProdAdd")
                .classList.remove("text-right");
        }
        if (document.getElementById("saveOuMAt")) {
            document.getElementById("saveOuMAt").textContent = "Save";
            document
                .getElementById("saveOuMAt")
                .classList.remove("text-right");
        }

           // _____________________add outils/materiaux______________

           if (document.getElementById("EditeModPlan")) {
            document.getElementById("EditeModPlan").textContent =
                "Edite Materiaux/outils";
        }

        if (document.getElementById("MaterOutiEdite")) {
            document.getElementById("MaterOutiEdite").textContent =
                "materiux/outils";
            document
                .getElementById("MaterOutiEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("NomPRoduitEdite")) {
            document.getElementById("NomPRoduitEdite").textContent =
                "nom produit";
            document
                .getElementById("NomPRoduitEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("saveMaOutEdit")) {
            document.getElementById("saveMaOutEdit").textContent = "Save";
            document
                .getElementById("saveMaOutEdit")
                .classList.remove("text-right");
        }
    }

    document.getElementById("arabicP").addEventListener("click", function () {
        traduireEnArabe1();

        document.getElementById("labelarbicP").classList.add("hidden");

        console.log("fgh");

        document.getElementById("labelFranceP").classList.remove("hidden");
    });

    document.getElementById("francaisP").addEventListener("click", function () {
        reinitialiserTexte1();

        document.getElementById("labelFranceP").classList.add("hidden");

        document.getElementById("labelarbicP").classList.remove("hidden");
    });

    const langueSelectionnee = localStorage.getItem("langueP");
    if (langueSelectionnee === "arabicP") {
        document.getElementById("arabicP").click();
    } else if (langueSelectionnee === "francaisP") {
        document.getElementById("francaisP").click();
    }
});
