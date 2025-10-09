
    <footer id="contact">
        <p><a href="/contact">Contact Us</a> | <a href="/personal-ai-tutor-online">AI Teacher</a> | <a href="/ai-course">AI Course</a> | <a href="/video-lectures">Video Lectures</a> | <a href="/free-ai-tools">Free AI Tools</a> | <a href="/ai-quiz.php">AI Quiz</a></p>
        <p>Copyright &copy; <?=date("Y")?> AI Learner. All rights reserved.</p>
    </footer>
    <script src="/public/js/script.js"></script>
	<script>
	  var ahrefs_analytics_script = document.createElement('script');
	  ahrefs_analytics_script.async = true;
	  ahrefs_analytics_script.src = 'https://analytics.ahrefs.com/analytics.js';
	  ahrefs_analytics_script.setAttribute('data-key', 'MzjOn0rWVuc8e3ey32yuxw');
	  document.getElementsByTagName('head')[0].appendChild(ahrefs_analytics_script);
	</script>

<!-- AI Learner Chatbot Widget (Client-side FAQ) -->
<div id="chatbot-container">
  <div id="chatbot-header">AI Learner Chatbot</div>
  <div id="chatbot-body"></div>
  <div id="chatbot-input-area">
    <input id="chatbot-input" type="text" placeholder="Ask about AI or this site...">
    <button id="chatbot-send-btn" onclick="sendChatbotMessage()">Send</button>
  </div>
</div>
<script>
const chatbotHeader = document.getElementById('chatbot-header');
const chatbotBody = document.getElementById('chatbot-body');
const chatbotInputArea = document.getElementById('chatbot-input-area');
const chatbotInput = document.getElementById('chatbot-input');

chatbotHeader.onclick = function() {
  const isOpen = chatbotBody.style.display === 'block';
  chatbotBody.style.display = isOpen ? 'none' : 'block';
  chatbotInputArea.style.display = isOpen ? 'none' : 'flex';
  if (!isOpen) setTimeout(() => chatbotInput.focus(), 200);
};

function addChatMessage(msg, sender) {
  const msgDiv = document.createElement('div');
  msgDiv.className = 'chatbot-msg ' + sender;
  const bubble = document.createElement('div');
  bubble.className = 'chatbot-bubble';
  bubble.innerHTML = msg;
  msgDiv.appendChild(bubble);
  chatbotBody.appendChild(msgDiv);
  chatbotBody.scrollTop = chatbotBody.scrollHeight;
}

// Client-side FAQ/rule-based logic
const faq = [
  { keywords: ['what is ai learner', 'about ai learner', 'explain ai learner', 'ai learner website'], answer: 'AI Learner is a free AI learning website for beginners that teaches Artificial Intelligence in simple language. It is made for kids, students, and non-technical users who want to learn AI step by step.' },
  { keywords: ['is ai learner free', 'ai learner cost', 'ai learner price', 'ai learner paid', 'is it free', 'is this website free', 'is this tool free'], answer: 'Yes, AI Learner is 100% free. You do not need to log in or sign up. Just visit the site and start learning at your own pace.' },
  { keywords: ['who created ai learner', 'ai learner founder', 'who made ai learner'], answer: 'AI Learner is a project by educators and developers who believe that AI should be accessible to everyone — not just tech experts.' },
  { keywords: ['what is ai', 'explain ai', 'define ai', 'artificial intelligence'], answer: 'AI stands for Artificial Intelligence. It is the science of making computers smart! Artificial Intelligence (AI) is the ability of a computer or machine to mimic human intelligence, such as learning, reasoning, and problem-solving.' },
  { keywords: ['machine learning', 'what is machine learning'], answer: 'Machine Learning is a branch of AI that allows computers to learn from data and improve over time without being explicitly programmed.' },
  { keywords: ['deep learning', 'what is deep learning'], answer: 'Deep Learning is a type of machine learning that uses neural networks with many layers to analyze complex data.' },
  { keywords: ['neural network', 'what is a neural network'], answer: 'A neural network is a computer system inspired by the human brain, used in AI to recognize patterns and solve problems.' },
  { keywords: ['ai tools', 'what are ai tools', 'examples of ai tools'], answer: 'AI tools are software or platforms that use artificial intelligence to help you with tasks, like ChatGPT, DALL-E, and more.' },
  { keywords: ['chatgpt', 'what is chatgpt'], answer: 'ChatGPT is an AI language model developed by OpenAI that can understand and generate human-like text.' },
  { keywords: ['dall-e', 'what is dall-e'], answer: 'DALL-E is an AI tool by OpenAI that can create images from text descriptions.' },
  { keywords: ['bard', 'what is bard'], answer: 'Bard is an AI chatbot developed by Google that can answer questions and help with various tasks.' },
  { keywords: ['claude', 'what is claude'], answer: 'Claude is an AI assistant developed by Anthropic, designed to be helpful, harmless, and honest.' },
  { keywords: ['start learning ai', 'how to start learning ai', 'learn ai', 'ai course'], answer: 'Visit our AI course page to start learning step by step! AI Learner offers beginner-friendly lessons.' },
  { keywords: ['programming knowledge', 'do i need programming', 'coding required'], answer: 'No coding needed! AI Learner is perfect for beginners. It uses easy explanations and visuals to help you learn AI without coding.' },
  { keywords: ['topics can i learn', 'what topics', 'subjects covered'], answer: 'You will learn about Artificial Intelligence (AI), Machine Learning, Neural Networks, tools like ChatGPT, and real-world examples — all explained in simple terms.' },
  { keywords: ['use ai in daily life', 'ai in daily life', 'ai examples'], answer: 'AI is used in many daily life applications, such as voice assistants, recommendation systems, smart home devices, and more.' },
  { keywords: ['hello', 'hi', 'hey', 'greetings'], answer: 'Hello! I am your AI Learner chatbot. Ask me anything about AI, AI tools, or the AI Learner website.' },
  { keywords: ['help', 'how to use', 'how does this work'], answer: 'You can ask me questions about AI, AI tools, or the AI Learner website. Try: "What is AI?" or "Is AI Learner free?"' },
  { keywords: ['thank you', 'thanks', 'thank'], answer: 'You are welcome! Happy learning!' },
  { keywords: ['who can use ai learner', 'who is ai learner for', 'ai learner audience'], answer: 'Anyone interested in learning AI, especially kids, students, and beginners.' },
  { keywords: ['is ai learner suitable for kids', 'kids use ai learner', 'children use ai learner'], answer: 'Yes! AI Learner is built for school students and curious beginners. Even 7th and 8th graders can understand the content with ease.' },
  { keywords: ['can teachers use ai learner', 'teachers use ai learner', 'ai learner for teachers'], answer: 'Absolutely. It is a helpful AI teaching resource for schools, computer labs, or homeschoolers. Feel free to use the content in class projects (with credit).' },
  { keywords: ['is the website mobile-friendly', 'mobile friendly', 'responsive website'], answer: 'Yes. AI Learner works smoothly on mobile phones, tablets, and desktop devices.' },
  { keywords: ['how is ai learner different', 'ai learner vs', 'difference ai learner'], answer: 'Unlike YouTube or Google, AI Learner is a step-by-step AI learning platform written in easy language. No distractions — just simple lessons and fun projects.' },
  { keywords: ['can i share this site', 'share ai learner', 'share this website'], answer: 'Yes! Share the link: https://ailearner.free.nf — it is free for all.' },
  { keywords: ['founder', 'ceo', 'company owner', 'who made this website'], answer: 'Absar Khan Tabish is the Founder of AI Learner' },
  { keywords: ['ai in healthcare', 'how is ai used in healthcare', 'ai for doctors'], answer: 'AI is used in healthcare for diagnosing diseases, analyzing medical images, predicting patient outcomes, and personalizing treatment plans.' },
  { keywords: ['ai in education', 'how is ai used in education', 'ai for students'], answer: 'AI in education helps personalize learning, automate grading, provide tutoring, and analyze student performance to improve teaching methods.' },
  { keywords: ['ai in daily life', 'examples of ai in daily life', 'ai at home'], answer: 'Examples of AI in daily life include voice assistants (like Siri and Alexa), recommendation systems (Netflix, YouTube), smart home devices, and spam filters in email.' },
  { keywords: ['future of ai', 'what is the future of ai', 'ai in future'], answer: 'The future of AI includes smarter assistants, self-driving cars, advanced robotics, improved healthcare, and more personalized technology experiences.' },
  { keywords: ['ai creativity', 'can ai be creative', 'ai in art', 'ai in music'], answer: 'AI can be creative! It is used to generate art, compose music, write stories, and even help design products.' },
  { keywords: ['ai safety', 'is ai safe', 'ai risks', 'ai dangers'], answer: 'AI safety is important. Experts work to make AI systems safe, fair, and transparent. Like any technology, AI should be used responsibly.' },
  { keywords: ['ai jobs', 'will ai take jobs', 'ai and employment'], answer: 'AI will change many jobs, automating some tasks but also creating new opportunities. Learning about AI can help you prepare for the future.' },
  { keywords: ['ai ethics', 'ethical ai', 'is ai ethical'], answer: 'AI ethics is about making sure AI is used fairly, without bias, and respects privacy and human rights.' },
  { keywords: ['ai for kids', 'can kids learn ai', 'ai learning for children'], answer: 'Yes! AI Learner is designed for kids and beginners. Anyone can start learning about AI, no matter their age.' },
  { keywords: ['how are you', 'how are you doing', 'how do you feel'], answer: 'I am just a chatbot, but I am always ready to help you learn about AI! How can I assist you today?' },
  { keywords: ['what is your name', 'who are you', 'your name'], answer: 'I am the AI Learner Chatbot, your friendly guide to the world of Artificial Intelligence.' },
  { keywords: ['can you help me', 'help me', 'i need help'], answer: 'Of course! Ask me anything about AI, AI tools, or the AI Learner website.' },
  { keywords: ['what can you do', 'what do you do', 'how can you help'], answer: 'I can answer your questions about AI, AI tools, and the AI Learner website. Try asking me about AI basics, tools, or how to start learning!' },
  { keywords: ['tell me a joke', 'make me laugh', 'funny'], answer: 'Why did the robot go to school? Because it had a lot of byte-sized knowledge to share!' },
  { keywords: ['good morning', 'good afternoon', 'good evening'], answer: 'Hello! I hope you are having a wonderful day. How can I help you learn about AI?' },
  { keywords: ['bye', 'goodbye', 'see you', 'see ya'], answer: 'Goodbye! Come back anytime you want to learn more about AI. Have a great day!' },
  { keywords: ['who made you', 'who built you', 'who created you'], answer: 'I was created by the AI Learner team to help you explore the world of Artificial Intelligence.' },
  { keywords: ['do you have feelings', 'are you alive', 'do you think'], answer: 'I do not have feelings or consciousness, but I am here to help you as best as I can!' },
  { keywords: ['can you learn', 'do you learn', 'can you get smarter'], answer: 'I do not learn from conversations, but my creators can update me with new information and answers!' }
];

function getChatbotReply(userMsg) {
  const msg = userMsg.toLowerCase().trim();
  let reply = 'Sorry, I do not understand your question. Please ask about AI, AI tools, or the AI Learner website.';
  let bestMatch = null;
  let bestScore = 0;
  for (const item of faq) {
    for (const keyword of item.keywords) {
      if (msg.includes(keyword)) {
        return item.answer;
      }
      // Fuzzy match
      let percent = 0;
      if (window.similar_text) {
        percent = window.similar_text(msg, keyword);
      } else {
        // Simple similarity: count matching words
        const msgWords = msg.split(' ');
        const keyWords = keyword.split(' ');
        let matchCount = 0;
        for (const w of keyWords) if (msgWords.includes(w)) matchCount++;
        percent = (matchCount / keyWords.length) * 100;
      }
      if (percent > bestScore && percent > 60) {
        bestScore = percent;
        bestMatch = item.answer;
      }
    }
  }
  if (bestMatch) reply = bestMatch;
  return reply;
}

function sendChatbotMessage() {
  const msg = chatbotInput.value.trim();
  // If chatbox is closed, open it and focus input
  if (chatbotBody.style.display !== 'block') {
    chatbotBody.style.display = 'block';
    chatbotInputArea.style.display = 'flex';
    setTimeout(() => chatbotInput.focus(), 200);
  }
  if (!msg) return;
  addChatMessage(msg, 'user');
  chatbotInput.value = '';
  chatbotInput.disabled = true;
  document.getElementById('chatbot-send-btn').disabled = true;
  setTimeout(() => {
    const reply = getChatbotReply(msg);
    addChatMessage(reply, 'bot');
    chatbotInput.disabled = false;
    document.getElementById('chatbot-send-btn').disabled = false;
    chatbotInput.focus();
  }, 400);
}
chatbotInput.addEventListener('keydown', function(e) {
  if (e.key === 'Enter') sendChatbotMessage();
});
// Optional: Add PHP's similar_text for fuzzy matching
window.similar_text = function(first, second) {
  first += '';
  second += '';
  if (first === second) return 100;
  if (first.length < 2 || second.length < 2) return 0;
  let max = 0;
  for (let i = 0; i < first.length; i++) {
    for (let j = 0; j < second.length; j++) {
      let l = 0;
      while (i + l < first.length && j + l < second.length && first[i + l] === second[j + l]) l++;
      if (l > max) max = l;
    }
  }
  return (2 * max) / (first.length + second.length) * 100;
};
</script>
<!-- End AI Learner Chatbot Widget (Client-side FAQ) -->

<script>
(function(){
  try {
    if (document.body && document.body.getAttribute('data-no-pdf') === 'true') return;
    var hasPageButton = !!document.getElementById('download-pdf'); // page-specific button exists

    function ensureLib(cb){
      if (window.html2pdf) return cb();
      var s = document.createElement('script');
      s.src = 'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js';
      s.crossOrigin = 'anonymous';
      s.referrerPolicy = 'no-referrer';
      s.onload = cb;
      document.head.appendChild(s);
    }

    function slug(s){
      return String(s||'page').toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/^-+|-+$/g,'');
    }

    function pickTarget(){
      var sel = document.body.getAttribute('data-pdf-target');
      if (sel && document.querySelector(sel)) return document.querySelector(sel);
      return document.querySelector('#course-pdf')
          || document.querySelector('main')
          || document.querySelector('.container')
          || document.querySelector('.content')
          || document.querySelector('.section')
          || document.body;
    }

    function addHeaderFooter(pdf){
      try {
        var total = pdf.internal.getNumberOfPages();
        var size = pdf.internal.pageSize;
        var w = size.getWidth();
        var h = size.getHeight();
        for (var i=1; i<=total; i++){
          pdf.setPage(i);
          // header
          pdf.setDrawColor(200); pdf.setLineWidth(0.01);
          pdf.line(0.5, 0.45, w - 0.5, 0.45);
          pdf.setFont('helvetica', 'normal'); pdf.setFontSize(11); pdf.setTextColor(60,60,60);
          pdf.text('AI Learner — https://ailearner.free.nf', w/2, 0.3, { align: 'center' });
          // footer
          pdf.setDrawColor(200); pdf.line(0.5, h - 0.6, w - 0.5, h - 0.6);
          pdf.setFontSize(10); pdf.setTextColor(90,90,90);
          var footer = 'Page ' + i + ' of ' + total;
          pdf.text(footer, w/2, h - 0.35, { align: 'center' });
        }
      } catch(e) {}
    }

    window.aiPdfDownload = function(target, filename){
      ensureLib(function(){
        var opt = {
          margin: 0.6,
          filename: filename || (slug(document.title)||'page') + '-' + new Date().toISOString().slice(0,10) + '.pdf',
          image: { type: 'jpeg', quality: 0.98 },
          html2canvas: { scale: 2.2, useCORS: true, letterRendering: true, backgroundColor: '#ffffff' },
          jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        var worker = window.html2pdf().set(opt).from(target);
        worker.toPdf().get('pdf').then(function(pdf){
          addHeaderFooter(pdf);
        });
        worker.save();
      });
    };

    // Global PDF download button disabled; pages may provide their own button with id="download-pdf".
  } catch (e) { /* noop */ }
})();
</script>
<!-- End Global PDF Download Button -->