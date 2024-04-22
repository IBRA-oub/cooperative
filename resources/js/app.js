
// ______________________________traduction ________________________________

const checkbox = document.querySelector('input[type="checkbox"]');

const dashboard = document.getElementById("dashboard");
const login = document.getElementById("login");
const hero = document.getElementById("hero");
const statistique = document.getElementById("statistique");
const dernierAnnonce = document.getElementById("dernierAnnonce");
const annonces = document.getElementById("annonces");
const dateAnnonce = document.getElementById("dateAnnonce");
const dateModified = document.getElementById("dateModifier");
const periode = document.getElementById("periode");
const dateDebut = document.getElementById("dateDebut");
const dateFinir = document.getElementById("dateFinir");

const forgetPassword = document.getElementById("forgetPassword");
const loginBTn = document.getElementById("loginBTn");

function traduireEnArabe() {
    // _______________welcome page tradution___________

    if (dashboard) {
        
        dashboard.textContent = "لوحة المعلومات";
    }
    if (login) {
        
        login.textContent = "تسجيل الدخول";
    }
    
    hero.textContent = " معًا، نزرع النجاح";
    statistique.textContent = "إحصائيات التعاونية  ";
    dernierAnnonce.textContent = "الإعلانات الأخيرة";
    annonces.textContent = "إعلانات";
    periode.textContent = "الفترة الزراعية";
    dateDebut.textContent = "تاريخ البدء";
    dateFinir.textContent = "تاريخ الانتهاء";
    dateAnnonce.textContent = "تاريخ الإعلان";
    dateModified.textContent = "تاريخ التعديل";

    // ________________login_______________

    forgetPassword.textContent = "نسيت كلمة المرور؟";
    loginBTn.textContent = "تسجيل";
}

function reinitialiserTexte() {
    // _______________welcome page tradution___________

    if (dashboard) {
        
        dashboard.textContent = "Dashboard";
    }
    if (login) {
        
        login.textContent = "Login";
    }

  
   
    hero.textContent = "Ensemble, nous cultivons le succès";
    statistique.textContent = "Les statistique de coopérative";
    dernierAnnonce.textContent = "Les dernières Annonces";
    annonces.textContent = "Annonces";
    periode.textContent = "La periode agricule";
    dateDebut.textContent = "date début";
    dateFinir.textContent = "date finir";
    dateAnnonce.textContent = "date annonce";
    dateModified.textContent = "date modified";

    // ________________login_______________

    forgetPassword.textContent = "oublier mot de passe?";
    loginBTn.textContent = "Login";
}

checkbox.addEventListener("change", function () {
    if (this.checked) {
        traduireEnArabe();
    } else {
        reinitialiserTexte();
    }
});


