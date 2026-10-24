$(document).ready(function() {
    
    if(document.cookie.indexOf('visitor_name=') != -1){
   //     alert(cook_name);
    var cook_name = document.cookie.replace(/(?:(?:^|.*;\s*)visitor_name\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    var cook_mobile = document.cookie.replace(/(?:(?:^|.*;\s*)visitor_mobile\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    var cook_email = document.cookie.replace(/(?:(?:^|.*;\s*)visitor_email\s*\=\s*([^;]*).*$)|^.*$/, "$1");    
        
    /*var cookie_val = document.cookie.split("; ");
    var cook_name = cookie_val[0].split("visitor_name=").pop();
    var cook_mobile = cookie_val[1].split("visitor_mobile=").pop();
    var cook_email = cookie_val[2].split("visitor_email=").pop();*/
    
    // Getting Page name
    var path = window.location.pathname;
    var page;
    var page_name = path.split("/").pop();
    var dept_mob,dept_email;
    if(page_name == "index.php"){
      page = "Services";
      dept_mob="8767003366";
      dept_email="support@popcorninfotech.com";
    }else if(page_name == "gst-services.php"){
      page = "GST Services"; 
      dept_mob="8291684942 / 9819397326";
      dept_email="gstreturn@popcorninfotech.com";
    }else if(page_name == "gst-registration.php"){
      page = "GST Registration Service"; 
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "gst-modification.php"){
      page = "GSTIN Modification Service";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "gst-cancellation.php"){
      page = "GSTIN Cancellation Service";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "gst-return-filing.php"){
      page = "GST Return Filing Service";
      dept_mob="8291684942 / 9819397326";
      dept_email="gstreturn@popcorninfotech.com";
    }else if(page_name == "lut.php"){
      page = "LUT Service";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "gst-consultancy.php"){
      page = "GST Consultancy Services";
      dept_mob="8767003366";
      dept_email="gstreturn@popcorninfotech.com";
    }else if(page_name == "gst-refund-application.php"){
      page = "GST Refund Application Service";
      dept_mob="8291684942 / 9819397326";
      dept_email="gstreturn@popcorninfotech.com";
    }else if(page_name == "e-invoicing.php"){
      page = "E-Invoicing Service";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "gst-reconciliation.php"){
      page = "GST Reconciliation Service";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "gst-audit-consultancy.php"){
      page = "GST Audit Service";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "e-way-bill.php"){
      page = "E-Way Bill Services";
      dept_mob="8767003366";
      dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "income-tax-return-filing.php"){
      page = "ITR Services";
      dept_mob="9167953573";
      dept_email="finserve@popcorninfotech.com";
    }else if(page_name == "new-business-registration.php"){
      page = "New Business Registration Services";
      dept_mob="9167675638";
      dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "compliance-services.php"){
      page = "Compliance Services";
      dept_mob="9167675638";
      dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "government-registration.php"){
      page = "Government Registration Services";
      dept_mob="9167675638";
      dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "other-financials-services.php"){
      page = "Other Financials Services";
      dept_mob="9167953573";
      dept_email="finserve@popcorninfotech.com";
    }else if(page_name == "intellectual-property.php"){
      page = "Intellectual Property Services";
      dept_mob="9167675638";
      dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "pan-card.php"){
      page = "Pan Card Services";
      dept_mob="9137896221";
      dept_email="sales@popcorninfotech.com";
    }else if(page_name == "courier-service.php"){
      page = "Courier Service";
      dept_mob="9167674893";
      dept_email="services@popcorninfotech.com";
    }else if(page_name == "digital-signature.php"){
      page = "Digital Signature Services";
      dept_mob="9137896221";
      dept_email="sales@popcorninfotech.com";
    }else if(page_name == "graphic-designing.php"){
      page = "Graphic Designing Services";
      dept_mob="8104719278";
      dept_email="graphics@popcorninfotech.com";
    }else if(page_name == "tour-travel-services.php"){
      page = "Tour & Travel Services";
      dept_mob="9137890344";
      dept_email="flights@popcorninfotech.com";
    }else if(page_name == "money-transfer.php"){
      page = "Money Transfer Service";
      dept_mob="8291684944";
      dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "aadhar-atm.php"){
      page = "Aadhar ATM Service";
      dept_mob="8291684944";
      dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "website-development-seo.php"){
      page = "Website Development Services";
      dept_mob="8104719278";
      dept_email="web@popcorninfotech.com";
    }else if(page_name == "passport-application.php"){
      page = "Passport Services";
      dept_mob="8291684944";
      dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "driving-license-application.php"){
      page = "Driving License Services";
      dept_mob="8291684944";
      dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "legal-drafting-services.php"){
      page = "Legal Drafting Services";
      dept_mob="";
      dept_email="legal@popcorninfotech.com";
    }else if(page_name == "recharge-utility-bill-payments.php"){
      page = "Recharges & Bill Payments Service";
      dept_mob="8291684944";
      dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "fastag.php"){
      page = "FASTag Service";
      dept_mob="8879184306";
      dept_email="fastag@popcorninfotech.com";
    }else if(page_name == "social-media-marketing.php"){
      page = "Social Media Marketing Service";
      dept_mob="8104719278";
      dept_email="web@popcorninfotech.com";
    }else if(page_name == "pharma-services.php"){
      page = "Pharma Services";
      dept_mob="7304972096";
      dept_email="pharma@popcorninfotech.com";
    }else if(page_name == "accounting-services.php"){
      page = "Accounting Services";
      dept_mob="8291684943";
      dept_email="accounts@popcorninfotech.com";
    }else if(page_name == "m-pos-micro-atm.php"){
      page = "Micro ATM Services";
      dept_mob="8291684944";
      dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "app-development.php"){
      page = "App Development Service";
      dept_mob="8104719278";
      dept_email="web@popcorninfotech.com";
    }else if(page_name == "Why-should-you-file-income-tax-returns.php"){
	page = "GST Registration Service"; 
    dept_mob="8767003366";
    dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "what-is-gst-suvidha-kendra.php"){
    	page = "GST Registration Service"; 
        dept_mob="8767003366";
        dept_email="gstnumber@popcorninfotech.com";
    }else if(page_name == "terms_of_use.php"){
    	page = "Terms Of Use"; 
        dept_mob="8767003366";
        dept_email="support@popcorninfotech.com";
    }else if(page_name == "terms-conditions.php"){
    	page = "Terms Conditions"; 
        dept_mob="8767003366";
        dept_email="support@popcorninfotech.com";
    }else if(page_name == "team.php"){
    	page = "Team"; 
        dept_mob="8767003366";
        dept_email="support@popcorninfotech.com";
    }else if(page_name == "start-online-business-with-no-money.php"){
    	page = "Start Online Business With No Money"; 
        dept_mob="8767003366";
        dept_email="support@popcorninfotech.com";
    }else if(page_name == "servicegraphic.php"){
          page = "Service Graphic";
          dept_mob="8104719278";
          dept_email="web@popcorninfotech.com";
    }else if(page_name == "send_perposal_service.php"){
    	page = "Send Perposal Service"; 
        dept_mob="8767003366";
        dept_email="support@popcorninfotech.com";
    }else if(page_name == "Section-8-Company.php"){
          page = "Section 8 Company";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "retail-mobile-app.php"){
          page = "Retail Mobile App";
          dept_mob="8104719278";
          dept_email="web@popcorninfotech.com";
    }else if(page_name == "Public-Limited-Company-Registration.php"){
          page = "Public Limited Company Registration";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "Producer-Company-Registration.php"){
          page = "Producer Company Registration";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "Private-Limited-Company.php"){
          page = "Private Limited Company";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "privacy-policy.php"){
          page = "Privacy Policy";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "banking@popcorninfotech.com"){
          page = "Privacy Policy";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "One-Person-Company.php"){
          page = "One Person Company";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "Nidhi-Company.php"){
          page = "Nidhi Company";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "news.php"){
          page = "News";
          dept_mob="9167675638";
          dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "msme-benefits-under-covid.php"){
          page = "Msme Benefits Under Covid";
          dept_mob="9167675638";
          dept_email="suvidha@popcorninfotech.com";
    }else if(page_name == "Limited-Liability-Partnership.php"){
          page = "Limited Liability Partnership";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "investments.php"){
          page = "Investments";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "icici-prepaid-debit-card.php"){
          page = "Icici Prepaid Debit Card";
          dept_mob="9167675638";
          dept_email="amazon@popcorninfotech.com";
    }else if(page_name == "gst-suvidha-kendra.php"){
          page = "GST Suvidha Kendra";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "gst-suvidha-kendra-registration.php"){
          page = "GST Suvidha Kendra Registration";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "gst-suvidha-kendra-franchisee-option.php"){
          page = "GST Suvidha Kendra Registration";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "gst-suvidha-center.php"){
          page = "GST Suvidha center";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "gst-services.php"){
          page = "GST Services";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "gst-franchise.php"){
          page = "GST Services";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "Gallery.php"){
          page = "Gallery";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "disclaimer.php"){
          page = "Disclaimer";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "contact-us.php"){
          page = "Contact Us";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "Common-compliances-that-are-uncommon-in-Startups.php"){
          page = "Common Compliances That Are Uncommon In Startups";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "be-a-sub-broker-or-trader-in-stocks.php"){
          page = "Be A Sub Broker Or Trader In Stocks";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "articles.php"){
          page = "Articles";
          dept_mob="9167675638";
          dept_email="support@popcorninfotech.com";
    }else if(page_name == "are_you_availing_the_maximum_epf_benefits.php"){
          page = "Are You Availing The Maximum Epf Benefits";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else if(page_name == "app-development.php"){
          page = "Are You Availing The Maximum Epf Benefits";
          dept_mob="9167675638";
          dept_email="graphics@popcorninfotech.com";
    }else if(page_name == "amazon-easy-store.php"){
          page = "Are You Availing The Maximum Epf Benefits";
          dept_mob="9167675638";
          dept_email="amazon@popcorninfotech.com";
    }else if(page_name == "aadhar-correction.php"){
          page = "Are You Availing The Maximum Epf Benefits";
          dept_mob="9167675638";
          dept_email="coserve@popcorninfotech.com";
    }else{
      page = "Services";
      dept_mob="8767003366";
      dept_email="support@popcorninfotech.com"; 
    }
    
    setTimeout(function(){
     $.ajax({
            url:'user_track_mail.php',
            method: 'post',
            data : {full_name:cook_name,contact_no:cook_mobile,email_id:cook_email,comment:"User stay at this page almost 3 minutes",page_name:page,dept_email:dept_email,dept_mob:dept_mob},
            success:function(data){
            console.log(data);
            }   
        });   
    }, 300000);
    
    }
});