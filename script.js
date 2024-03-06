
    // Check the stored language preference on page load
    document.addEventListener("DOMContentLoaded", function () {
      var storedLanguage = localStorage.getItem("preferredLanguage");
  
      if (storedLanguage) {
        setLanguage(storedLanguage);
      }
    });
  
    function toggleLanguage() {
      var currentLanguage = document.documentElement.lang;
  
      if (currentLanguage === 'en') {
        setLanguage('ar');
      } else {
        setLanguage('en');
      }
    }
  
    function setLanguage(language) {
      document.documentElement.lang = language;
  
      // Store the selected language preference
      localStorage.setItem("preferredLanguage", language);
  
      // Update the content based on the selected language
      if (language === 'ar') {
        updateContentToArabic();
      } else {
        updateContentToEnglish();
      }
    }
  
    function updateContentToArabic() {
      document.getElementById('homeLink').innerText = 'الصفحة الرئيسية';
        document.getElementById('aboutLink').innerText = 'من نحن';
        document.getElementById('servicesLink').innerText = 'خدماتنا';
        document.getElementById('solutionsLink').innerText = 'حلولنا';
        document.getElementById('contactLink').innerText = 'اتصل بنا';
    
        // Update main banner content with Arabic translations
        document.getElementById('welcomeText').innerText = ' مرحبًا بك في مكالمات فيرتا';
        document.getElementById('mainBannerContent').innerText = 'ابتكار الاتصالات من خلال الاستفادة من التكنولوجيا المتقدمة لتسهيل المشاركة والدعم السلس للعملاء، وكل ذلك مدعوم منا '
        document.getElementById('demoButton').innerText = 'احصل على عرض توضيحي';
        document.getElementById('login').innerText = 'تسجيل الدخول';
        document.getElementById('login1').innerText = 'تسجيل الدخول';
        document.getElementById('demoButton1').innerText = 'احصل على عرض توضيحي'; 
        document.getElementById('form-submit').innerText = ' ارسل  '; 

        document.getElementById('about_us_article').innerText = 'نحن نقدم بوابة لإطلاق العنان للإمكانات الكاملة لمشاركة العملاء ورضاهم. تعمل منصة الاتصال المتقدمة الخاصة بنا على تبسيط تفاعلات العملاء، مما يضمن تجربة مخصصة وغامرة لمشاركة سلسة.. حيث ندفع التواصل إلى المستقبل من خلال حل اتصال مبتكر مدعوم بالذكاء الاصطناعي. من خلال إعادة تعريف مشهد التفاعل بين العملاء والأعمال، تدمج منصتنا بسلاسة أحدث التقنيات';
        document.getElementById('phone').innerText = 'تفاعلات الهاتف ';
        document.getElementById('msg').innerText = 'محادثات عبر الإنترنت';
        document.getElementById('analysis').innerText = 'تحليل الأداء ';
        document.getElementById('ai').innerText = 'مساعدة مدعومة بالذكاء الاصطناعي ';

        document.getElementById('article_phone').innerText = ' فعّل تفاعلًا سلسًا مع العملاء من خلال محادثات شخصية وفعّالة عبر الهاتف لتعزيز الاتصالات ';
        document.getElementById('article_msg').innerText = 'قم بالاتصال الفوري مع العملاء، وقدم الدعم والحلول في الوقت الفعلي من خلال محادثات عبر الإنترنت التفاعلية  ';
        document.getElementById('article_analysis').innerText = 'احصل على رؤى قابلة للتنفيذ، وتتبع التقدم، وحسن استراتيجياتك من خلال تحليل أداء شامل وفهم مفصل  ';
        document.getElementById('article_ai').innerText = 'رفع مستوى العمليات باستخدام تكنولوجيا الذكاء الاصطناعي المتقدمة، وتقديم حلاً فعّالاً ومبتكراً ومُصمماً خصيصاً بشكل مستمر   ';

        document.getElementById('voxvirta').innerText = ' ارتقِ بمشاركة العملاء بسهولة. تدمج منصتنا تكنولوجيا متقدمة لتحقيق تفاعلات سلسة، وتعزيز تجارب شخصية، وفتح إمكانيات التفاعل اللامحدودة';
        document.getElementById('voxcommunication').innerText = 'توحيد وسائل التواصل الاجتماعي والمزيد على منصة واحدة. مزج تطبيقات الاتصال المتنوعة بسلاسة من أجل تفاعلات سهلة ';
        document.getElementById('voxai').innerText = 'من خلال دمج الذكاء الاصطناعي، نعيد تعريف دعم العملاء ليصبح مركزًا للوكلاء الافتراضيين. استمتع بتجربة تفاعلات مستقبلية حيث يقدم الوكلاء المعتمدون على الذكاء الاصطناعي دعمًا بديهيًا، مما يمثل حقبة جديدة من الخدمة';
        
        document.getElementById('article_contact').innerText='إذا كان لديك أي استفسارات أو أسئلة، لا تتردد في التواصل معنا الآن! نحن هنا للمساعدة  '

        // document.getElementById('slogan_h2').innerText='ثورة في مجال الاتصالات: '
        // document.getElementById('slogan_em').innerText=' حيث يلتقي الابتكار'
        // document.getElementById('slogan_span').innerText=' بالمشاركة الشخصية'
      }
  
    function updateContentToEnglish() {
   // Update menu items with English translations
        document.getElementById('homeLink').innerText = 'Home';
        document.getElementById('aboutLink').innerText = 'About Us';
        document.getElementById('servicesLink').innerText = 'Services';
        document.getElementById('solutionsLink').innerText = 'Solutions';
        document.getElementById('contactLink').innerText = 'Contact Us';
    
        // Update main banner content with English translations
        document.getElementById('welcomeText').innerText = 'Welcome to Virta calls';
        document.getElementById('demoButton').innerText = 'Get a Demo';
        document.getElementById('login').innerText = 'login';
        document.getElementById('login1').innerText = 'login';
        document.getElementById('demoButton1').innerText = 'Get a Demo';
        document.getElementById('form-submit').innerText = ' Send  '; 
        document.getElementById('mainBannerContent').innerText = 'Innovating connections by leveraging advanced technology to facilitate seamless customer engagement and support, all supported by Virta Call.';
        document.getElementById('about_us_article').innerText='We provide a gateway to unleashing the full potential of customer engagement and satisfaction. Our advanced contact platform simplifies client interactions, ensuring a personalized and immersive experience for seamless engagement.. where we propel communication into the future with an innovative AI-powered calling solution. Redefining the customer-business interaction landscape, our platform seamlessly merges state-of-the-art technology.'
        document.getElementById('phone').innerText = ' Phone Interactions';
        document.getElementById('msg').innerText = ' Online Conversations';
        document.getElementById('analysis').innerText = 'Performance Analysis ';
        document.getElementById('ai').innerText = 'AI-Powered Assistance '; 

        document.getElementById('article_phone').innerText = 'Engage customers seamlessly through personalized and efficient conversations via phone for enhanced connections.  ';
        document.getElementById('article_msg').innerText = 'Instantly connect with clients, providing real-time support and solutions through interactive online chats.  ';
        document.getElementById('article_analysis').innerText = 'Gain actionable insights, track progress, and optimize strategies through comprehensive and insightful performance analysis.  ';
        document.getElementById('article_ai').innerText = ' Elevate operations with cutting-edge AI technology, delivering efficient, innovative, and tailored solutions consistently.   ';
        
        document.getElementById('voxvirta').innerText = ' Elevate customer engagement effortlessly. Our platform merges advanced tech for seamless interactions, fostering personalized experiences and unlocking limitless interaction potential.';
        document.getElementById('voxcommunication').innerText = 'Unify WhatsApp, Viber, Botim, and more on one platform. Seamlessly blend diverse communication apps for effective interactions, empowering connectivity in a centralized hub. ';
        document.getElementById('voxai').innerText = 'By integrating AI, we redefine customer support into a hub for virtual agents. Experience futuristic interactions where AI-driven agents offer intuitive support, marking a new service era.  ';
    
        document.getElementById('article_contact').innerText='If you have any inquiries or questions, do not hesitate to get in touch.We are here to assist—reach out now!'

       
      }
