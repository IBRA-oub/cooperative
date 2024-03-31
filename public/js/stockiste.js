document.addEventListener("DOMContentLoaded", function () {
    function traduireEnArabe1() {
        localStorage.setItem("langueS", "arabicS");

        // __________________sidebar______________
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

        // ______________________stocks page_________________

        if (document.getElementById("tableSto")) {
            document.getElementById("tableSto").classList.add("rtl");

            document.getElementById("tableSto").classList.remove("ltr");
        }

        if (document.getElementById("addProStok")) {
            document.getElementById("addProStok").textContent = "إضافة منتج";
        }

        if (document.getElementById("idProSto")) {
            document.getElementById("idProSto").textContent = "معرف";
        }

        if (document.getElementById("nomProStok")) {
            document.getElementById("nomProStok").textContent = " اسم المنتج";
        }

        if (document.getElementById("quantiterProSTok")) {
            document.getElementById("quantiterProSTok").textContent = "الكمية";
        }

        if (document.getElementById("actionProStok")) {
            document.getElementById("actionProStok").textContent =
                " المزيد من الخيارات";
        }

        // ______________________add produit stocks_________________

        if (document.getElementById("produitEnStok")) {
            document.getElementById("produitEnStok").textContent =
                " إضافة منتج إلى المخزون";
        }

        if (document.getElementById("nomProdStok")) {
            document.getElementById("nomProdStok").textContent = " اسم المنتج ";
            document.getElementById("nomProdStok").classList.add("text-right");
        }

        if (document.getElementById("quantiterStok")) {
            document.getElementById("quantiterStok").textContent = "الكمية";
            document
                .getElementById("quantiterStok")
                .classList.add("text-right");
        }

        if (document.getElementById("saveStok")) {
            document.getElementById("saveStok").textContent = "حفظ";
        }

          // ______________________Edit produit stocks_________________

          if (document.getElementById("EditeProStok")) {
            document.getElementById("EditeProStok").textContent =
                "تعديل المنتج";
            
        }

        if (document.getElementById("ProstockEDit")) {
            document.getElementById("ProstockEDit").textContent =
                "اسم المنتج";
            document.getElementById("ProstockEDit").classList.add("text-right");
        }

        if (document.getElementById("quantiterEdit")) {
            document.getElementById("quantiterEdit").textContent = "الكمية";
            document
                .getElementById("quantiterEdit")
                .classList.add("text-right");
        }

        if (document.getElementById("saveEdit")) {
            document.getElementById("saveEdit").textContent = "حفظ";
        }
    }











    function reinitialiserTexte1() {
        localStorage.setItem("langueS", "francaisS");

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

        // ______________________stocks page_________________

        if (document.getElementById("tableSto")) {
            document.getElementById("tableSto").classList.add("lft");

            document.getElementById("tableSto").classList.remove("rtl");
        }

        if (document.getElementById("addProStok")) {
            document.getElementById("addProStok").textContent =
                "   ajouter produit ";
        }

        if (document.getElementById("idProSto")) {
            document.getElementById("idProSto").textContent = "ID";
        }

        if (document.getElementById("nomProStok")) {
            document.getElementById("nomProStok").textContent = " nom Produit";
        }

        if (document.getElementById("quantiterProSTok")) {
            document.getElementById("quantiterProSTok").textContent =
                "Quantiter";
        }

        if (document.getElementById("actionProStok")) {
            document.getElementById("actionProStok").textContent =
                " plus options";
        }

        // ______________________add produit stocks_________________

        if (document.getElementById("produitEnStok")) {
            document.getElementById("produitEnStok").textContent =
                " add Produit en stocke";
            document
                .getElementById("produitEnStok")
                .classList.add("text-right");
        }

        if (document.getElementById("nomProdStok")) {
            document.getElementById("nomProdStok").textContent =
                " nom de produit ";
            document.getElementById("nomProdStok").classList.add("text-right");
        }

        if (document.getElementById("quantiterStok")) {
            document.getElementById("quantiterStok").textContent = "quantiter";
            document
                .getElementById("quantiterStok")
                .classList.add("text-right");
        }

        if (document.getElementById("saveStok")) {
            document.getElementById("saveStok").textContent = "Save";
        }

         // ______________________Edit produit stocks_________________

         if (document.getElementById("EditeProStok")) {
            document.getElementById("EditeProStok").textContent =
                " Edit produit en stocke";
            
        }

        if (document.getElementById("ProstockEDit")) {
            document.getElementById("ProstockEDit").textContent =
                " nom de produit ";
            document.getElementById("ProstockEDit").classList.remove("text-right");
        }

        if (document.getElementById("quantiterEdit")) {
            document.getElementById("quantiterEdit").textContent = "quantiter";
            document
                .getElementById("quantiterEdit")
                .classList.remove("text-right");
        }

        if (document.getElementById("saveEdit")) {
            document.getElementById("saveEdit").textContent = "Save";
        }
    }







    document.getElementById("arabicS").addEventListener("click", function () {
        traduireEnArabe1();

        document.getElementById("labelarbicS").classList.add("hidden");

        console.log("fgh");

        document.getElementById("labelFranceS").classList.remove("hidden");
    });

    document.getElementById("francaisS").addEventListener("click", function () {
        reinitialiserTexte1();

        document.getElementById("labelFranceS").classList.add("hidden");

        document.getElementById("labelarbicS").classList.remove("hidden");
    });

    const langueSelectionnee = localStorage.getItem("langueS");
    if (langueSelectionnee === "arabicS") {
        document.getElementById("arabicS").click();
    } else if (langueSelectionnee === "francaisS") {
        document.getElementById("francaisS").click();
    }
});
