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
        if (document.getElementById("publicitaire")) {
            document.getElementById("publicitaire").textContent = "إعلان";
        }
        if (document.getElementById("publicitaire1")) {
            document.getElementById("publicitaire1").textContent = "إعلان";
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
            document.getElementById("HR/j").textContent = "ساعات العمل ";
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

        // _____________________________publicitaire___________________

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

         if (document.getElementById("addPubliciter1")) {
            document.getElementById("addPubliciter1").textContent =
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
                    " تحديث إعلان";
            
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

            // _____________message_______________

            if (document.getElementById("financiere")) {
                document.getElementById("financiere").textContent =
                    "المسؤول المالي ";
             
            }
            if (document.getElementById("financiere1")) {
                document.getElementById("financiere1").textContent =
                    "المسؤول المالي ";
             
            }
            if (document.getElementById("planner")) {
                document.getElementById("planner").textContent =
                    " المسؤول الزراعي ";
             
            }
            if (document.getElementById("planner1")) {
                document.getElementById("planner1").textContent =
                    " المسؤول الزراعي ";
             
            }
            if (document.getElementById("stockiste")) {
                document.getElementById("stockiste").textContent =
                    " مسؤول المخزون ";
             
            }
            if (document.getElementById("stockiste1")) {
                document.getElementById("stockiste1").textContent =
                    " مسؤول المخزون ";
             
            }
            if (document.getElementById("envoyer")) {
                document.getElementById("envoyer").textContent =
                    "  إرسال ";
             
            }
    }

    function reinitialiserTexte1() {
        localStorage.setItem("langue", "francais");

        if (document.getElementById("publicitaire")) {
            document.getElementById("publicitaire").textContent = "Publiciter";
        }
        if (document.getElementById("publicitaire1")) {
            document.getElementById("publicitaire1").textContent = "Publiciter";
        }

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
            document.getElementById("FL").textContent = "nom et prénom";
            document.getElementById("FL").classList.remove("text-right");
        }

        if (document.getElementById("EM")) {
            document.getElementById("EM").textContent = "Email";
            document.getElementById("EM").classList.remove("text-right");
        }

        if (document.getElementById("PS")) {
            document.getElementById("PS").textContent = "Mot de passe";
            document.getElementById("PS").classList.remove("text-right");
        }

        if (document.getElementById("SL")) {
            document.getElementById("SL").textContent = "Salaire/Heure";
            document.getElementById("SL").classList.remove("text-right");
        }

        if (document.getElementById("pic")) {
            document.getElementById("pic").textContent = "image";
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
            document.getElementById("addU").textContent = " Ajouter";
        }

        if (document.getElementById("id")) {
            document.getElementById("id").textContent = " id";
        }

        if (document.getElementById("fulN")) {
            document.getElementById("fulN").textContent = " nom et prénom";
        }

        if (document.getElementById("Ema")) {
            document.getElementById("Ema").textContent = " Email";
        }

        if (document.getElementById("s/l")) {
            document.getElementById("s/l").textContent = " Salaire/heure";
        }

        if (document.getElementById("HR/j")) {
            document.getElementById("HR/j").textContent =
                " heures Taravailler";
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
            document.getElementById("FLE").textContent = "nom et prénom";
            document.getElementById("FLE").classList.remove("text-right");
        }

        if (document.getElementById("EME")) {
            document.getElementById("EME").textContent = "Email";
            document.getElementById("EME").classList.remove("text-right");
        }

        if (document.getElementById("PSE")) {
            document.getElementById("PSE").textContent = "Mot de passe";
            document.getElementById("PSE").classList.remove("text-right");
        }

        if (document.getElementById("SLE")) {
            document.getElementById("SLE").textContent = "Salaire/Heure";
            document.getElementById("SLE").classList.remove("text-right");
        }

        if (document.getElementById("picE")) {
            document.getElementById("picE").textContent = "image";
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
            document.getElementById("fnTH").textContent = "nom et prénom";
        }
        if (document.getElementById("hTH")) {
            document.getElementById("hTH").textContent = "heurs";
        }
        if (document.getElementById("jTH")) {
            document.getElementById("jTH").textContent = "jour";
        }

        // ________________________publicitaire_____________________
         // _______________________publicitaire_____________________

         if (document.getElementById("addPubliciter")) {
            document.getElementById("addPubliciter").textContent = "ajouter publiciter";
        }

        if (document.getElementById("dateAnnonce")) {
            document.getElementById("dateAnnonce").textContent = "date Annonce";
        }

        if (document.getElementById("dateModified")) {
            document.getElementById("dateModified").textContent = "date Modified";
        }

        // _______________________add publiciter___________________

        if (document.getElementById("addPubliciter1")) {
            document.getElementById("addPubliciter1").textContent =
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
                "image";
            document
                .getElementById("picture")
                .classList.remove("text-right");
        }

        if (document.getElementById("savePubli")) {
            document.getElementById("savePubli").textContent =
                "Enregistrer";
          
        }

        // ___________________edite publicitaire_____________
        if (document.getElementById("EditePubliciter")) {
            document.getElementById("EditePubliciter").textContent =
                " mise a jour publiciter";
        
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
                "image ";
            document
                .getElementById("picturEdite")
                .classList.remove("text-right");
        }
        if (document.getElementById("saveEdite")) {
            document.getElementById("saveEdite").textContent =
                "mise à jour";
         
        }

          // _____________message_______________

          if (document.getElementById("financiere")) {
            document.getElementById("financiere").textContent =
                " Financiere ";
         
        }
        if (document.getElementById("planner")) {
            document.getElementById("planner").textContent =
                "  Responsable agricule ";
         
        }
        if (document.getElementById("stockiste")) {
            document.getElementById("stockiste").textContent =
                "  Stockiste ";
         
        }
          if (document.getElementById("financiere1")) {
            document.getElementById("financiere1").textContent =
                " Financiere ";
         
        }
        if (document.getElementById("planner1")) {
            document.getElementById("planner1").textContent =
                "  Responsable agricule ";
         
        }
        if (document.getElementById("stockiste1")) {
            document.getElementById("stockiste1").textContent =
                "  Stockiste ";
         
        }
        if (document.getElementById("envoyer")) {
            document.getElementById("envoyer").textContent =
                "  Envoyer ";
         
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
