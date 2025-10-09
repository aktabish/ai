<?php
session_start();
include 'db.php';
include 'page_visit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'layout/head.php'; ?>
    <title>AI Quiz – AI Learner</title>
    <meta name="description" content="Test your knowledge with our fun and simple AI quiz! Perfect for kids, students, and non-tech professionals. Learn about Artificial Intelligence in a playful way." />
    <meta name="keywords" content="AI quiz, fun AI, artificial intelligence for kids, AI education, AI for students">
    <meta name="author" content="AI Learner Team">
    <!-- Open Graph (for LinkedIn, WhatsApp, Facebook) -->
    <meta name="title" property="og:title" content="AI Quiz – AI Learner" >
    <meta property="og:description" content="Test your knowledge with our fun and simple AI quiz! Perfect for kids, students, and non-tech professionals. Learn about Artificial Intelligence in a playful way.">
    <meta property="og:url" content="https://ailearner.free.nf/ai-quiz">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AI Quiz – AI Learner">
    <meta name="twitter:description" content="Test your knowledge with our fun and simple AI quiz! Perfect for kids, students, and non-tech professionals. Learn about Artificial Intelligence in a playful way.">
    <meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
    <meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "AI Learner",
      "url": "https://ailearner.free.nf/ai-quiz",
      "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
    }
    </script>
    <style>
        .container {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 32px 24px;
        }
        h1 {
            text-align: center;
            color: #2a7ae2;
        }
        .progress {
            text-align: right;
            font-size: 1em;
            color: #555;
            margin-bottom: 10px;
        }
        .question {
            font-size: 1.2em;
            margin-bottom: 18px;
        }
        .answers button {
            display: block;
            width: 100%;
            margin: 8px 0;
            padding: 12px;
            font-size: 1em;
            border: 2px solid #2a7ae2;
            border-radius: 8px;
            background: #e6f0fa;
            cursor: pointer;
            transition: background 0.2s;
        }
        .answers button:hover {
            background: #b3d8fd;
        }
        .result {
            text-align: center;
            font-size: 1.3em;
            margin-top: 24px;
            color: #28a745;
        }
        .explanation {
            font-size: 1em;
            color: #555;
            margin-top: 10px;
        }
        .restart {
            display: block;
            margin: 30px auto 0 auto;
            padding: 10px 24px;
            font-size: 1em;
            background: #2a7ae2;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .restart:hover {
            background: #155a96;
        }
        .certificate-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        #certificate {
            background: #f0f8ff;
            border: 2px solid #2a7ae2;
            border-radius: 12px;
            padding: 24px 16px;
            width: 350px;
            text-align: center;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        #certificate h2 {
            color: #2a7ae2;
        }
        #certificate .score {
            font-size: 1.5em;
            color: #28a745;
            margin: 12px 0;
        }
        .download-btns {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 18px;
        }
        .download-btns button {
            background: #2a7ae2;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            font-size: 1em;
            cursor: pointer;
        }
        .download-btns button:hover {
            background: #155a96;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body>
<?php include 'layout/header.php'; ?>
<div class="container">
    <h1>Fun AI Quiz!</h1>
    <div style="text-align:center;margin-bottom:18px;">
        <a href="https://ailearner.free.nf" target="_blank">
            <img src="https://ailearner.free.nf/public/images/ailearner-180x180.png" alt="AI Learner Logo" style="width:80px;height:80px;border-radius:16px;box-shadow:0 2px 8px #2a7ae233;">
        </a>
    </div>
    <div style="text-align:center;margin-bottom:18px;font-size:1.05em;color:#2a7ae2;">
        <strong>AI Learner</strong> is your friendly guide to understanding Artificial Intelligence!<br>
        <span style="color:#444;">Learn, play, and discover the world of AI at <a href="https://ailearner.free.nf" target="_blank">ailearner.free.nf/</a>.</span>
    </div>
    <div id="quiz">
        <!-- Quiz will be injected here -->
    </div>
</div>
<?php include 'layout/footer.php'; ?>
<script>
    // 100 fun, simple AI questions for kids, students, non-tech
    const questions = [
        {question: "What does AI stand for?",answers:["Animal Intelligence","Artificial Intelligence","Awesome Ideas","Amazing Inventions"],correct:1,explanation:"AI stands for Artificial Intelligence, which means machines that can do things that usually need human intelligence!"},
        {question: "Which of these is an example of AI you might use every day?",answers:["A bicycle","A talking smart assistant (like Siri or Alexa)","A pencil","A sandwich"],correct:1,explanation:"Smart assistants like Siri or Alexa use AI to understand and answer your questions!"},
        {question: "Can AI learn from examples, like how you learn from practice?",answers:["Yes, AI can learn from examples!","No, AI never learns.","Only on weekends.","Only if it eats pizza."],correct:0,explanation:"AI can learn from lots of examples, just like you get better at things by practicing!"},
        {question: "Which job can AI help with?",answers:["Sorting photos","Translating languages","Playing games","All of the above"],correct:3,explanation:"AI can help with all these things and more!"},
        {question: "Is AI always smarter than people?",answers:["Yes, always!","No, people are still better at many things.","Only on holidays.","Only if it rains."],correct:1,explanation:"AI is good at some things, but people are creative and can do many things AI can't!"},
        {question: "What is a robot?",answers:["A kind of sandwich","A machine that can do tasks","A type of animal","A video game"],correct:1,explanation:"A robot is a machine that can do tasks, sometimes using AI!"},
        {question: "Which of these is NOT an AI?",answers:["Calculator","Self-driving car","Chatbot","Face recognition"],correct:0,explanation:"A calculator just follows instructions, it doesn't learn or think like AI."},
        {question: "What do we call it when a computer can see and recognize things?",answers:["Computer vision","Computer glasses","Computer dreams","Computer sleep"],correct:0,explanation:"Computer vision is when computers can see and understand images or videos."},
        {question: "Which animal inspired the term 'neural network' in AI?",answers:["Dog","Cat","Human brain","Fish"],correct:2,explanation:"Neural networks are inspired by the human brain!"},
        {question: "What is a chatbot?",answers:["A robot that chats","A computer program that talks with people","A type of chocolate","A talking dog"],correct:1,explanation:"A chatbot is a computer program that can chat with people, often using AI."},
        {question: "What is the main goal of AI?",answers:["To make machines that can think and learn","To make pizza","To play football","To sleep all day"],correct:0,explanation:"AI's main goal is to make machines that can think and learn like humans!"},
        {question: "Which of these is a smart assistant?",answers:["Alexa","Banana","Car","Spoon"],correct:0,explanation:"Alexa is a smart assistant that uses AI!"},
        {question: "What is 'machine learning'?",answers:["Machines going to school","Machines learning from data","Machines eating lunch","Machines playing games"],correct:1,explanation:"Machine learning is when machines learn from data and get better over time!"},
        {question: "Which of these can AI NOT do?",answers:["Dream like humans","Play chess","Translate languages","Sort emails"],correct:0,explanation:"AI can't dream like humans, but it can do the other things!"},
        {question: "What is 'training' in AI?",answers:["Teaching AI with lots of examples","Running a race","Cooking food","Drawing pictures"],correct:0,explanation:"Training in AI means teaching it with lots of examples so it can learn."},
        {question: "What is 'data' in AI?",answers:["Information that AI learns from","A type of fruit","A dance move","A superhero"],correct:0,explanation:"Data is information that AI uses to learn and make decisions."},
        {question: "Which of these is a real use of AI?",answers:["Helping doctors find diseases","Making weather predictions","Recommending videos","All of the above"],correct:3,explanation:"AI is used in all these ways and more!"},
        {question: "What is 'voice recognition'?",answers:["AI understanding spoken words","AI eating food","AI running fast","AI playing music"],correct:0,explanation:"Voice recognition is when AI understands what you say."},
        {question: "What is 'face recognition'?",answers:["AI recognizing faces in photos","AI drawing faces","AI making faces","AI washing faces"],correct:0,explanation:"Face recognition is when AI can tell who someone is from a photo."},
        {question: "Which of these is a famous AI in movies?",answers:["R2-D2","Spiderman","Harry Potter","SpongeBob"],correct:0,explanation:"R2-D2 is a famous robot with AI in Star Wars!"},
        {question: "Which of these is a type of AI game?",answers:["Chess with a computer","Hide and seek with friends","Hopscotch","Tag"],correct:0,explanation:"Playing chess with a computer is an example of an AI game!"},
        {question: "What is a 'self-driving car'?",answers:["A car that drives itself using AI","A car that flies","A car that swims","A car that bakes cakes"],correct:0,explanation:"A self-driving car uses AI to drive itself!"},
        {question: "Which of these is a smart home device?",answers:["Smart speaker","Smart cookie","Smart pencil","Smart shoe"],correct:0,explanation:"A smart speaker uses AI to help you at home!"},
        {question: "What is 'translation' in AI?",answers:["Changing languages using AI","Changing colors","Changing shapes","Changing clothes"],correct:0,explanation:"AI can help translate one language to another!"},
        {question: "Which of these is a virtual assistant?",answers:["Google Assistant","Superman","Batman","Iron Man"],correct:0,explanation:"Google Assistant is a virtual assistant that uses AI!"},
        {question: "What is 'pattern recognition'?",answers:["AI finding patterns in data","AI making patterns on paper","AI dancing","AI singing"],correct:0,explanation:"Pattern recognition is when AI finds patterns in data!"},
        {question: "Which of these is a benefit of AI?",answers:["Helping people","Making life easier","Solving problems","All of the above"],correct:3,explanation:"AI helps people, makes life easier, and solves problems!"},
        {question: "What is 'recommendation' in AI?",answers:["AI suggesting things you might like","AI running fast","AI jumping high","AI eating food"],correct:0,explanation:"AI recommends things like videos or songs you might like!"},
        {question: "Which of these is a robot pet?",answers:["Aibo","Cat","Dog","Fish"],correct:0,explanation:"Aibo is a robot pet that uses AI!"},
        {question: "What is 'speech recognition'?",answers:["AI understanding spoken words","AI making speeches","AI writing books","AI drawing"],correct:0,explanation:"Speech recognition is when AI understands what you say!"},
        {question: "Which of these is a smart device?",answers:["Smartphone","Smart rock","Smart tree","Smart cloud"],correct:0,explanation:"A smartphone is a smart device that uses AI!"},
        {question: "What is 'automation'?",answers:["AI doing tasks automatically","AI painting pictures","AI singing songs","AI playing sports"],correct:0,explanation:"Automation is when AI does tasks automatically!"},
        {question: "Which of these is a famous AI character?",answers:["Wall-E","Mickey Mouse","Donald Duck","Goofy"],correct:0,explanation:"Wall-E is a famous AI robot from a movie!"},
        {question: "What is 'learning' in AI?",answers:["Getting better with practice","Getting taller","Getting older","Getting faster"],correct:0,explanation:"Learning in AI means getting better with practice!"},
        {question: "Which of these is a use of AI in health?",answers:["Finding diseases","Making pizza","Playing games","Drawing"],correct:0,explanation:"AI can help doctors find diseases!"},
        {question: "What is 'big data'?",answers:["Lots of information for AI","Big pizza","Big shoes","Big hats"],correct:0,explanation:"Big data means lots of information for AI to learn from!"},
        {question: "Which of these is a use of AI in shopping?",answers:["Recommending products","Making cookies","Washing clothes","Flying planes"],correct:0,explanation:"AI can recommend products you might like when shopping!"},
        {question: "What is 'image recognition'?",answers:["AI understanding pictures","AI drawing pictures","AI painting","AI singing"],correct:0,explanation:"Image recognition is when AI understands pictures!"},
        {question: "Which of these is a use of AI in music?",answers:["Making playlists","Making pizza","Making beds","Making shoes"],correct:0,explanation:"AI can help make music playlists!"},
        {question: "What is 'robotics'?",answers:["Building robots","Building houses","Building cars","Building boats"],correct:0,explanation:"Robotics is about building robots, often with AI!"},
        {question: "Which of these is a use of AI in sports?",answers:["Analyzing games","Making pizza","Washing cars","Flying kites"],correct:0,explanation:"AI can analyze games in sports!"},
        {question: "What is 'virtual reality'?",answers:["A computer-made world","A real world","A dream","A book"],correct:0,explanation:"Virtual reality is a computer-made world you can explore!"},
        {question: "Which of these is a use of AI in art?",answers:["Creating pictures","Making pizza","Washing dishes","Flying planes"],correct:0,explanation:"AI can help create pictures and art!"},
        {question: "What is 'translation' in AI?",answers:["Changing languages using AI","Changing colors","Changing shapes","Changing clothes"],correct:0,explanation:"AI can help translate one language to another!"},
        {question: "Which of these is a use of AI in travel?",answers:["Finding the best route","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help find the best route when you travel!"},
        {question: "What is 'smart home'?",answers:["A home with AI devices","A home with pizza","A home with lots of books","A home with many pets"],correct:0,explanation:"A smart home has devices that use AI!"},
        {question: "Which of these is a use of AI in weather?",answers:["Predicting the weather","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help predict the weather!"},
        {question: "What is 'chatbot'?",answers:["A computer program that chats","A robot that dances","A dog that talks","A cat that sings"],correct:0,explanation:"A chatbot is a computer program that chats with people!"},
        {question: "Which of these is a use of AI in education?",answers:["Helping students learn","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help students learn!"},
        {question: "What is 'smartwatch'?",answers:["A watch with AI features","A watch that eats pizza","A watch that sings","A watch that flies"],correct:0,explanation:"A smartwatch is a watch with AI features!"},
        {question: "Which of these is a use of AI in movies?",answers:["Making special effects","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help make special effects in movies!"},
        {question: "What is 'recommendation system'?",answers:["AI suggesting things you might like","AI running fast","AI jumping high","AI eating food"],correct:0,explanation:"A recommendation system suggests things you might like!"},
        {question: "Which of these is a use of AI in security?",answers:["Recognizing faces","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can recognize faces for security!"},
        {question: "What is 'automation'?",answers:["AI doing tasks automatically","AI painting pictures","AI singing songs","AI playing sports"],correct:0,explanation:"Automation is when AI does tasks automatically!"},
        {question: "Which of these is a use of AI in farming?",answers:["Checking plant health","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can check plant health in farming!"},
        {question: "What is 'object detection'?",answers:["AI finding things in pictures","AI making pizza","AI washing cars","AI flying planes"],correct:0,explanation:"Object detection is when AI finds things in pictures!"},
        {question: "Which of these is a use of AI in finance?",answers:["Detecting fraud","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can detect fraud in finance!"},
        {question: "What is 'language model'?",answers:["AI that understands language","AI that eats pizza","AI that sings","AI that flies"],correct:0,explanation:"A language model is AI that understands language!"},
        {question: "Which of these is a use of AI in games?",answers:["Making smart opponents","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can make smart opponents in games!"},
        {question: "What is 'deep learning'?",answers:["A type of machine learning","A type of pizza","A type of car","A type of hat"],correct:0,explanation:"Deep learning is a type of machine learning!"},
        {question: "Which of these is a use of AI in writing?",answers:["Helping write stories","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help write stories!"},
        {question: "What is 'smart city'?",answers:["A city using AI for better living","A city with pizza","A city with many cars","A city with tall buildings"],correct:0,explanation:"A smart city uses AI for better living!"},
        {question: "Which of these is a use of AI in shopping?",answers:["Recommending products","Making cookies","Washing clothes","Flying planes"],correct:0,explanation:"AI can recommend products you might like when shopping!"},
        {question: "What is 'gesture recognition'?",answers:["AI understanding hand movements","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Gesture recognition is when AI understands hand movements!"},
        {question: "Which of these is a use of AI in transportation?",answers:["Self-driving cars","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI is used in self-driving cars!"},
        {question: "What is 'emotion recognition'?",answers:["AI understanding feelings","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Emotion recognition is when AI understands feelings!"},
        {question: "Which of these is a use of AI in news?",answers:["Writing news articles","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help write news articles!"},
        {question: "What is 'smart fridge'?",answers:["A fridge with AI features","A fridge that eats pizza","A fridge that sings","A fridge that flies"],correct:0,explanation:"A smart fridge has AI features!"},
        {question: "Which of these is a use of AI in search engines?",answers:["Finding answers quickly","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI helps search engines find answers quickly!"},
        {question: "What is 'virtual assistant'?",answers:["A computer helper using AI","A pizza maker","A car washer","A plane flyer"],correct:0,explanation:"A virtual assistant is a computer helper using AI!"},
        {question: "Which of these is a use of AI in books?",answers:["Recommending books","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can recommend books you might like!"},
        {question: "What is 'predictive text'?",answers:["AI guessing your next word","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Predictive text is when AI guesses your next word!"},
        {question: "Which of these is a use of AI in emails?",answers:["Sorting spam","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can sort spam emails!"},
        {question: "What is 'face filter'?",answers:["AI adding effects to faces","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Face filters use AI to add effects to faces!"},
        {question: "Which of these is a use of AI in maps?",answers:["Finding the best route","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI helps maps find the best route!"},
        {question: "What is 'object tracking'?",answers:["AI following things in videos","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Object tracking is when AI follows things in videos!"},
        {question: "Which of these is a use of AI in factories?",answers:["Controlling robots","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI controls robots in factories!"},
        {question: "What is 'spam filter'?",answers:["AI blocking unwanted emails","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Spam filters use AI to block unwanted emails!"},
        {question: "Which of these is a use of AI in banking?",answers:["Detecting fraud","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can detect fraud in banking!"},
        {question: "What is 'recommendation engine'?",answers:["AI suggesting things you might like","AI running fast","AI jumping high","AI eating food"],correct:0,explanation:"A recommendation engine suggests things you might like!"},
        {question: "Which of these is a use of AI in online shopping?",answers:["Personalized ads","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI shows personalized ads in online shopping!"},
        {question: "What is 'machine translation'?",answers:["AI translating languages","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Machine translation is when AI translates languages!"},
        {question: "Which of these is a use of AI in customer service?",answers:["Chatbots answering questions","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"Chatbots use AI to answer customer questions!"},
        {question: "What is 'smart TV'?",answers:["A TV with AI features","A TV that eats pizza","A TV that sings","A TV that flies"],correct:0,explanation:"A smart TV has AI features!"},
        {question: "Which of these is a use of AI in language learning?",answers:["Helping practice languages","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help you practice languages!"},
        {question: "What is 'music recommendation'?",answers:["AI suggesting songs","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Music recommendation is when AI suggests songs!"},
        {question: "Which of these is a use of AI in delivery?",answers:["Finding the fastest route","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI finds the fastest route for delivery!"},
        {question: "What is 'photo tagging'?",answers:["AI recognizing people in photos","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Photo tagging is when AI recognizes people in photos!"},
        {question: "Which of these is a use of AI in social media?",answers:["Suggesting friends","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI suggests friends on social media!"},
        {question: "What is 'voice assistant'?",answers:["A helper that listens and talks using AI","A pizza maker","A car washer","A plane flyer"],correct:0,explanation:"A voice assistant listens and talks using AI!"},
        {question: "Which of these is a use of AI in reading?",answers:["Reading text aloud","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can read text aloud!"},
        {question: "What is 'smart speaker'?",answers:["A speaker with AI features","A speaker that eats pizza","A speaker that sings","A speaker that flies"],correct:0,explanation:"A smart speaker has AI features!"},
        {question: "Which of these is a use of AI in translation?",answers:["Translating languages","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can translate languages!"},
        {question: "What is 'personal assistant'?",answers:["A helper using AI","A pizza maker","A car washer","A plane flyer"],correct:0,explanation:"A personal assistant is a helper using AI!"},
        {question: "Which of these is a use of AI in video games?",answers:["Smart computer players","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI makes smart computer players in games!"},
        {question: "What is 'text-to-speech'?",answers:["AI reading text aloud","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Text-to-speech is when AI reads text aloud!"},
        {question: "Which of these is a use of AI in science?",answers:["Analyzing data","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI analyzes data in science!"},
        {question: "What is 'face unlock'?",answers:["Unlocking devices with your face using AI","Eating pizza","Singing","Flying"],correct:0,explanation:"Face unlock uses AI to unlock devices with your face!"},
        {question: "Which of these is a use of AI in medicine?",answers:["Diagnosing diseases","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can help diagnose diseases!"},
        {question: "What is 'object recognition'?",answers:["AI identifying things in pictures","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Object recognition is when AI identifies things in pictures!"},
        {question: "Which of these is a use of AI in learning?",answers:["Personalized lessons","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can give personalized lessons!"},
        {question: "What is 'weather prediction'?",answers:["AI guessing the weather","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Weather prediction is when AI guesses the weather!"},
        {question: "Which of these is a use of AI in robots?",answers:["Making robots smart","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI makes robots smart!"},
        {question: "What is 'handwriting recognition'?",answers:["AI reading handwriting","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Handwriting recognition is when AI reads handwriting!"},
        {question: "Which of these is a use of AI in factories?",answers:["Controlling machines","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI controls machines in factories!"},
        {question: "What is 'navigation'?",answers:["AI finding the best way to go","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Navigation is when AI finds the best way to go!"},
        {question: "Which of these is a use of AI in toys?",answers:["Talking dolls","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI makes talking dolls!"},
        {question: "What is 'translation app'?",answers:["An app that translates using AI","An app that eats pizza","An app that sings","An app that flies"],correct:0,explanation:"A translation app uses AI to translate!"},
        {question: "Which of these is a use of AI in smart homes?",answers:["Controlling lights","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can control lights in smart homes!"},
        {question: "What is 'virtual friend'?",answers:["A computer friend using AI","A pizza friend","A singing friend","A flying friend"],correct:0,explanation:"A virtual friend is a computer friend using AI!"},
        {question: "Which of these is a use of AI in reading?",answers:["Reading stories aloud","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can read stories aloud!"},
        {question: "What is 'smart alarm'?",answers:["An alarm that learns your habits using AI","An alarm that eats pizza","An alarm that sings","An alarm that flies"],correct:0,explanation:"A smart alarm learns your habits using AI!"},
        {question: "Which of these is a use of AI in banking?",answers:["Detecting fraud","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can detect fraud in banking!"},
        {question: "What is 'photo filter'?",answers:["AI adding effects to photos","AI eating pizza","AI singing","AI flying"],correct:0,explanation:"Photo filters use AI to add effects to photos!"},
        {question: "Which of these is a use of AI in delivery?",answers:["Finding the fastest route","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI finds the fastest route for delivery!"},
        {question: "What is 'voice command'?",answers:["Telling devices what to do using AI","Eating pizza","Singing","Flying"],correct:0,explanation:"Voice command is telling devices what to do using AI!"},
        {question: "Which of these is a use of AI in online safety?",answers:["Blocking bad websites","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can block bad websites for safety!"},
        {question: "What is 'face swap'?",answers:["AI changing faces in photos","Eating pizza","Singing","Flying"],correct:0,explanation:"Face swap is when AI changes faces in photos!"},
        {question: "Which of these is a use of AI in smart watches?",answers:["Tracking steps","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI tracks steps in smart watches!"},
        {question: "What is 'emoji suggestion'?",answers:["AI suggesting emojis","Eating pizza","Singing","Flying"],correct:0,explanation:"Emoji suggestion is when AI suggests emojis!"},
        {question: "Which of these is a use of AI in learning?",answers:["Personalized lessons","Making pizza","Washing cars","Flying planes"],correct:0,explanation:"AI can give personalized lessons!"},
        {question: "What is 'object detection'?",answers:["AI finding things in pictures","AI making pizza","AI washing cars","AI flying planes"],correct:0,explanation:"Object detection is when AI finds things in pictures!"},
        {question: "Which of these is a use of AI in health?",answers:["Finding diseases","Making pizza","Playing games","Drawing"],correct:0,explanation:"AI can help doctors find diseases!"}
    ];

    // Shuffle and pick 10 random questions
    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
    }
    // Pick 10 unique random questions for each session
    let availableIndexes = Array.from({length: questions.length}, (_, i) => i);
    shuffle(availableIndexes);
    let quizQuestions = availableIndexes.slice(0, 10).map(i => {
        // Deep copy to avoid mutating the original questions array
        let q = JSON.parse(JSON.stringify(questions[i]));
        // Shuffle answers and update correct index
        let answerPairs = q.answers.map((ans, idx) => ({ans, idx}));
        shuffle(answerPairs);
        q.answers = answerPairs.map(pair => pair.ans);
        q.correct = answerPairs.findIndex(pair => pair.idx === q.correct);
        return q;
    });

    let current = 0;
    let score = 0;

    function showQuestion() {
        const q = quizQuestions[current];
        let html = `<div class='progress'>Question ${current+1}/10 | Points: ${score}</div>`;
        html += `<div class='question'>${q.question}</div><div class='answers'>`;
        q.answers.forEach((ans, idx) => {
            html += `<button onclick='answer(${idx})'>${ans}</button>`;
        });
        html += `</div>`;
        document.getElementById('quiz').innerHTML = html;
    }

    function answer(idx) {
        const q = quizQuestions[current];
        let result = '';
        if (idx === q.correct) {
            score++;
            result = `<div class='result'>Correct! 🎉</div>`;
        } else {
            result = `<div class='result' style='color:#e22;'>Oops! That's not right.</div>`;
        }
        result += `<div class='explanation'>${q.explanation}</div>`;
        document.getElementById('quiz').innerHTML = result;
        setTimeout(() => {
            current++;
            if (current < quizQuestions.length) {
                showQuestion();
            } else {
                showScore();
            }
        }, 1800);
    }

    function showScore() {
        let msg = '';
        if (score === quizQuestions.length) {
            msg = "You're an AI superstar! 🌟";
        } else if (score >= quizQuestions.length - 1) {
            msg = "Great job! You know a lot about AI!";
        } else {
            msg = "Nice try! Keep learning about AI!";
        }
        document.getElementById('quiz').innerHTML = `
            <div class='result'>You scored ${score} out of ${quizQuestions.length}!</div>
            <div class='explanation'>${msg}</div>
            <div class='certificate-container'>
                <div id='certificate'>
                    <a href="https://ailearner.free.nf" target="_blank">
                        <img src="https://ailearner.free.nf/public/images/ailearner-180x180.png" alt="AI Learner Logo" style="width:60px;height:60px;border-radius:12px;margin-bottom:8px;">
                    </a>
                    <h2>AI Quiz Certificate</h2>
                    <div class='score'>${score} / ${quizQuestions.length}</div>
                    <div>Congratulations on completing the quiz!</div>
                    <div style='margin-top:10px;font-size:0.9em;color:#888;'>Share your achievement!</div>
                    <div style='margin-top:10px;font-size:0.9em;color:#2a7ae2;'>
                        <a href="https://ailearner.free.nf" target="_blank" style="color:#2a7ae2;text-decoration:underline;">ailearner.free.nf</a>
                    </div>
                </div>
            </div>
            <div class='download-btns'>
                <button onclick='downloadPNG()'>Download as PNG</button>
                <button onclick='downloadPDF()'>Download as PDF</button>
            </div>
            <button class='restart' onclick='restart()'>Play Again</button>
        `;
    }

    function restart() {
        current = 0;
        score = 0;
        availableIndexes = Array.from({length: questions.length}, (_, i) => i);
        shuffle(availableIndexes);
        quizQuestions = availableIndexes.slice(0, 10).map(i => questions[i]);
        showQuestion();
    }

    // Certificate download functions
    function downloadPNG() {
        html2canvas(document.getElementById('certificate')).then(function(canvas) {
            const link = document.createElement('a');
            link.download = 'ai-quiz-certificate.png';
            link.href = canvas.toDataURL();
            link.click();
        });
    }
    function downloadPDF() {
        html2canvas(document.getElementById('certificate')).then(function(canvas) {
            const imgData = canvas.toDataURL('image/png');
            const pdf = new window.jspdf.jsPDF();
            pdf.addImage(imgData, 'PNG', 15, 15, 180, 80);
            pdf.save('ai-quiz-certificate.pdf');
        });
    }

    // Expose answer and restart to global for inline onclick
    window.answer = answer;
    window.restart = restart;
    window.downloadPNG = downloadPNG;
    window.downloadPDF = downloadPDF;

    showQuestion();
</script>
</body>
</html>
