document.addEventListener("DOMContentLoaded", function () {
    function traduireEnArabe1() {
        localStorage.setItem("languePU", "arabicPU");

        // _________________side bar________________
         if (document.getElementById("infoSatati")) {
            document.getElementById("infoSatati").textContent =
                "معلومات / إحصائيات";
        }

        if (document.getElementById("infoSatati1")) {
            document.getElementById("infoSatati1").textContent =
                "معلومات / إحصائيات";
        }

        if (document.getElementById("infoSatati")) {
            document.getElementById("infoSatati").textContent =
                "معلومات / إحصائيات";
        }

        if (document.getElementById("infoSatati1")) {
            document.getElementById("infoSatati1").textContent =
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

        // ___________________publiciter_______________

        if (document.getElementById("addPubliciter")) {
            document.getElementById("addPubliciter").textContent = "إضافة إعلان";
        }

        if (document.getElementById("dateAnnonce")) {
            document.getElementById("dateAnnonce").textContent = "تاريخ الإعلان";
        }

        if (document.getElementById("dateModified")) {
            document.getElementById("dateModified").textContent = "تاريخ التعديل";
        }

         // _______________________add publiciter___________________

         if (document.getElementById("addPubliciter")) {
            document.getElementById("addPubliciter").textContent =
                " إضافة إعلان";
        
        }

        if (document.getElementById("titreAdd")) {
            document.getElementById("titreAdd").textContent =
                "عنوان";
            document
                .getElementById("titreAdd")
                .classList.add("text-right");
        }
        if (document.getElementById("description")) {
            document.getElementById("description").textContent =
                "وصف";
            document
                .getElementById("description")
                .classList.add("text-right");
        }
        if (document.getElementById("contenu")) {
            document.getElementById("contenu").textContent =
                "المحتوى";
            document
                .getElementById("contenu")
                .classList.add("text-right");
        }
        if (document.getElementById("datePubliciter")) {
            document.getElementById("datePubliciter").textContent =
                "تاريخ الإعلان";
            document
                .getElementById("datePubliciter")
                .classList.add("text-right");
        }
        if (document.getElementById("picture")) {
            document.getElementById("picture").textContent =
                "صورة";
            document
                .getElementById("picture")
                .classList.add("text-right");
        }
        if (document.getElementById("savePubli")) {
            document.getElementById("savePubli").textContent =
                "حفظ";
          
        }

            // ___________________edite publicitaire_____________
            if (document.getElementById("EditePubliciter")) {
                document.getElementById("EditePubliciter").textContent =
                    " تعديل المنتج";
            
            }
    
            if (document.getElementById("titreEdite")) {
                document.getElementById("titreEdite").textContent =
                    "عنوان";
                document
                    .getElementById("titreEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("descriptionEdite")) {
                document.getElementById("descriptionEdite").textContent =
                    "وصف";
                document
                    .getElementById("descriptionEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("contenuEdite")) {
                document.getElementById("contenuEdite").textContent =
                    "المحتوى";
                document
                    .getElementById("contenuEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("datePubliEdite")) {
                document.getElementById("datePubliEdite").textContent =
                    "تاريخ الإعلان";
                document
                    .getElementById("datePubliEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("picturEdite")) {
                document.getElementById("picturEdite").textContent =
                    "صورة ";
                document
                    .getElementById("picturEdite")
                    .classList.add("text-right");
            }
            if (document.getElementById("saveEdite")) {
                document.getElementById("saveEdite").textContent =
                    "حفظ ";
             
            }


    }


    function reinitialiserTexte1() {
        localStorage.setItem("languePU", "francaisPU");

        
        // __________________sidebar________________
        if (document.getElementById("infoSatati")) {
            document.getElementById("infoSatati").textContent =
                "info/Statistique";
        }

        if (document.getElementById("infoSatati1")) {
            document.getElementById("infoSatati1").textContent =
                "info/Statistique";
        }

        if (document.getElementById("dashboard")) {
            document.getElementById("dashboard").textContent = "Dashboard ";
        }

        if (document.getElementById("dashboard1")) {
            document.getElementById("dashboard1").textContent = " Dashboard";
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

        // _______________________publicitaire_____________________

        if (document.getElementById("addPubliciter")) {
            document.getElementById("addPubliciter").textContent = "add publiciter";
        }

        if (document.getElementById("dateAnnonce")) {
            document.getElementById("dateAnnonce").textContent = "date Annonce";
        }

        if (document.getElementById("dateModified")) {
            document.getElementById("dateModified").textContent = "date Modified";
        }

        // _______________________add publiciter___________________

        if (document.getElementById("addPubliciter")) {
            document.getElementById("addPubliciter").textContent =
                " ajouter Publiciter";
        
        }

        if (document.getElementById("titreAdd")) {
            document.getElementById("titreAdd").textContent =
                "titre";
            document
                .getElementById("titreAdd")
                .classList.remove("text-right");
        }
        if (document.getElementById("description")) {
            document.getElementById("description").textContent =
                "description";
            document
                .getElementById("description")
                .classList.remove("text-right");
        }
        if (document.getElementById("contenu")) {
            document.getElementById("contenu").textContent =
                "contenu";
            document
                .getElementById("contenu")
                .classList.remove("text-right");
        }
        if (document.getElementById("datePubliciter")) {
            document.getElementById("datePubliciter").textContent =
                "date publiciter";
            document
                .getElementById("datePubliciter")
                .classList.remove("text-right");
        }
        if (document.getElementById("picture")) {
            document.getElementById("picture").textContent =
                "picture";
            document
                .getElementById("picture")
                .classList.remove("text-right");
        }

        if (document.getElementById("savePubli")) {
            document.getElementById("savePubli").textContent =
                "Save";
          
        }

        // ___________________edite publicitaire_____________
        if (document.getElementById("EditePubliciter")) {
            document.getElementById("EditePubliciter").textContent =
                " edit produit stocke";
        
        }

        if (document.getElementById("titreEdite")) {
            document.getElementById("titreEdite").textContent =
                "titre";
            document
                .getElementById("titreEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("descriptionEdite")) {
            document.getElementById("descriptionEdite").textContent =
                "description";
            document
                .getElementById("descriptionEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("contenuEdite")) {
            document.getElementById("contenuEdite").textContent =
                "contenu";
            document
                .getElementById("contenuEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("datePubliEdite")) {
            document.getElementById("datePubliEdite").textContent =
                "date publiciter";
            document
                .getElementById("datePubliEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("picturEdite")) {
            document.getElementById("picturEdite").textContent =
                "picture ";
            document
                .getElementById("picturEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("saveEdite")) {
            document.getElementById("saveEdite").textContent =
                "Save ";
         
        }
    }







    document.getElementById("arabicPU").addEventListener("click", function () {
        traduireEnArabe1();

        document.getElementById("labelarbicPU").classList.add("hidden");

        console.log("fgh");

        document.getElementById("labelFrancePU").classList.remove("hidden");
    });

    document.getElementById("francaisPU").addEventListener("click", function () {
        reinitialiserTexte1();

        document.getElementById("labelFrancePU").classList.add("hidden");

        document.getElementById("labelarbicPU").classList.remove("hidden");
    });

    const langueSelectionnee = localStorage.getItem("languePU");
    if (langueSelectionnee === "arabicPU") {
        document.getElementById("arabicPU").click();
    } else if (langueSelectionnee === "francaisPU") {
        document.getElementById("francaisPU").click();
    }
});
