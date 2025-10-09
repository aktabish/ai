<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$user_message = strtolower(trim($data['message'] ?? ''));

$faq = [
    [
        'keywords' => ['what is ai learner', 'about ai learner', 'explain ai learner', 'ai learner website'],
        'answer' => 'AI Learner is a free AI learning website for beginners that teaches Artificial Intelligence in simple language. It is made for kids, students, and non-technical users who want to learn AI step by step.'
    ],
    [
        'keywords' => ['is ai learner free', 'ai learner cost', 'ai learner price', 'ai learner paid'],
        'answer' => 'Yes, AI Learner is 100% free. You do not need to log in or sign up. Just visit the site and start learning at your own pace.'
    ],
    [
        'keywords' => ['who created ai learner', 'ai learner founder', 'who made ai learner'],
        'answer' => 'AI Learner is a project by educators and developers who believe that AI should be accessible to everyone — not just tech experts.'
    ],
    [
        'keywords' => ['what is ai', 'explain ai', 'define ai', 'artificial intelligence'],
        'answer' => 'AI stands for Artificial Intelligence. It is the science of making computers smart! Artificial Intelligence (AI) is the ability of a computer or machine to mimic human intelligence, such as learning, reasoning, and problem-solving.'
    ],
    [
        'keywords' => ['machine learning', 'what is machine learning'],
        'answer' => 'Machine Learning is a branch of AI that allows computers to learn from data and improve over time without being explicitly programmed.'
    ],
    [
        'keywords' => ['deep learning', 'what is deep learning'],
        'answer' => 'Deep Learning is a type of machine learning that uses neural networks with many layers to analyze complex data.'
    ],
    [
        'keywords' => ['neural network', 'what is a neural network'],
        'answer' => 'A neural network is a computer system inspired by the human brain, used in AI to recognize patterns and solve problems.'
    ],
    [
        'keywords' => ['ai tools', 'what are ai tools', 'examples of ai tools'],
        'answer' => 'AI tools are software or platforms that use artificial intelligence to help you with tasks, like ChatGPT, DALL-E, and more.'
    ],
    [
        'keywords' => ['chatgpt', 'what is chatgpt'],
        'answer' => 'ChatGPT is an AI language model developed by OpenAI that can understand and generate human-like text.'
    ],
    [
        'keywords' => ['dall-e', 'what is dall-e'],
        'answer' => 'DALL-E is an AI tool by OpenAI that can create images from text descriptions.'
    ],
    [
        'keywords' => ['bard', 'what is bard'],
        'answer' => 'Bard is an AI chatbot developed by Google that can answer questions and help with various tasks.'
    ],
    [
        'keywords' => ['claude', 'what is claude'],
        'answer' => 'Claude is an AI assistant developed by Anthropic, designed to be helpful, harmless, and honest.'
    ],
    [
        'keywords' => ['start learning ai', 'how to start learning ai', 'learn ai', 'ai course'],
        'answer' => 'Visit our AI course page to start learning step by step! AI Learner offers beginner-friendly lessons.'
    ],
    [
        'keywords' => ['programming knowledge', 'do i need programming', 'coding required'],
        'answer' => 'No coding needed! AI Learner is perfect for beginners. It uses easy explanations and visuals to help you learn AI without coding.'
    ],
    [
        'keywords' => ['topics can i learn', 'what topics', 'subjects covered'],
        'answer' => 'You will learn about Artificial Intelligence (AI), Machine Learning, Neural Networks, tools like ChatGPT, and real-world examples — all explained in simple terms.'
    ],
    [
        'keywords' => ['use ai in daily life', 'ai in daily life', 'ai examples'],
        'answer' => 'AI is used in many daily life applications, such as voice assistants, recommendation systems, smart home devices, and more.'
    ],
    [
        'keywords' => ['hello', 'hi', 'hey', 'greetings'],
        'answer' => 'Hello! I am your AI Learner chatbot. Ask me anything about AI, AI tools, or the AI Learner website.'
    ],
    [
        'keywords' => ['help', 'how to use', 'how does this work'],
        'answer' => 'You can ask me questions about AI, AI tools, or the AI Learner website. Try: "What is AI?" or "Is AI Learner free?"'
    ],
    [
        'keywords' => ['thank you', 'thanks', 'thank'],
        'answer' => 'You are welcome! Happy learning!'
    ],
    [
        'keywords' => ['who can use ai learner', 'who is ai learner for', 'ai learner audience'],
        'answer' => 'Anyone interested in learning AI, especially kids, students, and beginners.'
    ],
    [
        'keywords' => ['is ai learner suitable for kids', 'kids use ai learner', 'children use ai learner'],
        'answer' => 'Yes! AI Learner is built for school students and curious beginners. Even 7th and 8th graders can understand the content with ease.'
    ],
    [
        'keywords' => ['can teachers use ai learner', 'teachers use ai learner', 'ai learner for teachers'],
        'answer' => 'Absolutely. It is a helpful AI teaching resource for schools, computer labs, or homeschoolers. Feel free to use the content in class projects (with credit).'
    ],
    [
        'keywords' => ['is the website mobile-friendly', 'mobile friendly', 'responsive website'],
        'answer' => 'Yes. AI Learner works smoothly on mobile phones, tablets, and desktop devices.'
    ],
    [
        'keywords' => ['how is ai learner different', 'ai learner vs', 'difference ai learner'],
        'answer' => 'Unlike YouTube or Google, AI Learner is a step-by-step AI learning platform written in easy language. No distractions — just simple lessons and fun projects.'
    ],
    [
        'keywords' => ['can i share this site', 'share ai learner', 'share this website'],
        'answer' => 'Yes! Share the link: https://ailearner.free.nf — it is free for all.'
    ],
];

$reply = 'Sorry, I do not understand your question. Please ask about AI, AI tools, or the AI Learner website.';

// Try to find the best match
$bestMatch = null;
$bestScore = 0;

foreach ($faq as $item) {
    foreach ($item['keywords'] as $keyword) {
        // Exact or partial match
        if (strpos($user_message, $keyword) !== false) {
            $reply = $item['answer'];
            $bestMatch = null;
            break 2;
        }
        // Fuzzy match: count similar words
        similar_text($user_message, $keyword, $percent);
        if ($percent > $bestScore && $percent > 60) { // 60% similarity threshold
            $bestScore = $percent;
            $bestMatch = $item['answer'];
        }
    }
}

if ($bestMatch) {
    $reply = $bestMatch;
}

echo json_encode(['reply' => $reply]); 