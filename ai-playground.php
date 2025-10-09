<?php
	session_start();
	include 'db.php';
	include 'page_visit.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<title>AI Playground for Kids – Fun, Safe Offline AI Demos | AI Learner</title>
		<link rel="canonical" href="https://ailearner.free.nf/ai-playground" />
		<meta name="description" content="Play with kid-friendly AI demos in your browser: chat buddy, silly story generator, animal facts, emoji translator, and pattern painter. No sign-in, no data saved." />
		<meta name="keywords" content="AI playground, AI games for kids, learn AI, AI demos, educational games, story generator, emoji translator, kid-friendly AI, offline AI, AI learning tools">
		<meta name="author" content="AI Learner Team">
		
		<!-- Open Graph (for LinkedIn, WhatsApp, Facebook) -->
		<meta name="title" property="og:title" content="AI Playground for Kids – Fun, Safe Offline AI Demos | AI Learner" >
		<meta property="og:description" content="Try interactive AI-style mini apps for kids: chat buddy, story generator, animal Q&A, emoji translator, and pattern painter.">
		<meta property="og:url" content="https://ailearner.free.nf/ai-playground">
		<meta property="og:type" content="website">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="AI Playground for Kids – Fun, Safe Offline AI Demos | AI Learner">
		<meta name="twitter:description" content="Play kid-friendly AI demos right in your browser—no sign-in, no data saved.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
		
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "WebApplication",
		  "name": "AI Playground for Kids – Fun, Safe Offline AI Demos",
		  "url": "https://ailearner.free.nf/ai-playground",
		  "description": "Interactive AI-style mini apps for kids and beginners: chat buddy, silly story generator, animal facts Q&A, emoji translator, and pattern painter. Runs in the browser, no sign-in required.",
		  "applicationCategory": "EducationalApplication",
		  "operatingSystem": "Web",
		  "inLanguage": "English",
		  "isAccessibleForFree": true,
		  "creator": {
			"@type": "Organization",
			"name": "AI Learner",
			"url": "https://ailearner.free.nf"
		  },
		  "offers": {
			"@type": "Offer",
			"price": "0.00",
			"priceCurrency": "USD",
			"availability": "https://schema.org/InStock",
			"url": "https://ailearner.free.nf/ai-playground"
		  }
		}
		</script>
		<style>
		  /* Scoped styles for AI Playground to avoid conflicting with global site CSS */
		  .ai-playground .wrap { max-width: 1100px; margin: 0 auto; padding: 0 18px; }
		  .ai-playground .grid { display: grid; grid-template-columns: repeat(12, 1fr); gap: 18px; }
		  .ai-playground .card { grid-column: span 12; background: #0b1220; border: 1px solid #1f2937; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,.15); overflow: hidden; }
		  .ai-playground .card .head { display:flex; align-items:center; justify-content:space-between; gap:14px; padding:16px; border-bottom:1px dashed #253244; background: linear-gradient(180deg, rgba(96,165,250,.08), transparent), linear-gradient(90deg, rgba(34,197,94,.06), transparent); }
		  .ai-playground .card .body { padding: 16px; }
		  .ai-playground .pill { display:inline-flex; align-items:center; gap:6px; font-weight:700; font-size:.9rem; padding:6px 10px; border-radius:999px; border:1px solid #243042; background:#0c1321; color:#a5b4fc; }
		  .ai-playground .row { display:flex; gap:10px; flex-wrap:wrap; }
		  .ai-playground input[type="text"], .ai-playground input[type="number"], .ai-playground select, .ai-playground textarea {
			width:100%; background:#0b1220; border:1px solid #223046; color:#e5e7eb; padding:10px 12px; border-radius:10px; font-size:1rem;
		  }
		  .ai-playground textarea { min-height: 100px; resize: vertical; }
		  .ai-playground .btn { background: linear-gradient(180deg, #22c55e, #16a34a); color:#06130b; border:none; padding:10px 14px; border-radius:10px; font-weight:800; letter-spacing:.2px; cursor:pointer; box-shadow:0 6px 16px rgba(34,197,94,.35); }
		  .ai-playground .btn.secondary { background: linear-gradient(180deg, #60a5fa, #3b82f6); color:#081225; box-shadow: 0 6px 16px rgba(59,130,246,.35); }
		  .ai-playground .btn.warning { background: linear-gradient(180deg, #f59e0b, #d97706); color:#1a0d00; box-shadow: 0 6px 16px rgba(245,158,11,.35); }
		  .ai-playground .btn.ghost { background:#0b1220; color:#e5e7eb; border:1px solid #223046; box-shadow:none; }
		  .ai-playground .kbd { font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; background:#0a1020; border:1px solid #223046; padding:2px 6px; border-radius:6px; }
		  .ai-playground .muted { color:#94a3b8; }
		  /* chat */
		  .ai-playground .chatbox { height: 280px; overflow:auto; padding:10px; border:1px solid #223046; border-radius:12px; background:#0a1220; }
		  .ai-playground .msg { display:flex; gap:8px; margin:8px 0; }
		  .ai-playground .bubble { max-width:74%; padding:10px 12px; border-radius:12px; }
		  .ai-playground .me { justify-content:flex-end; }
		  .ai-playground .me .bubble { background:#1e293b; border:1px solid #2a3a52; }
		  .ai-playground .bot .bubble { background:#052e1a; border:1px solid #0b4c2a; }
		  .ai-playground .avatar { width:32px; height:32px; border-radius:8px; background:#0c1321; display:flex; align-items:center; justify-content:center; font-weight:800; color:#a3e635; }
		  .ai-playground .quick { display:flex; gap:8px; flex-wrap:wrap; margin-top:8px; }
		  .ai-playground .quick button { font-size:.9rem; padding:6px 10px; }
		  /* story */
		  .ai-playground .story-output { border:1px dashed #243042; background:#0b1322; padding:12px; border-radius:12px; min-height:110px; white-space:pre-wrap; }
		  /* animal */
		  .ai-playground .fact { background:#07111f; border:1px solid #1d2a3c; border-radius:12px; padding:10px; }
		  /* emoji */
		  .ai-playground .mono { font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
		  /* painter */
		  .ai-playground .canvas-wrap { position:relative; background:#050a14; border:1px solid #1d2a3c; border-radius:12px; overflow:hidden; }
		  .ai-playground canvas { display:block; width:100%; height:360px; }
		  @media (min-width:760px) {
			.ai-playground .col-6 { grid-column: span 6; }
			.ai-playground .col-4 { grid-column: span 4; }
		  }
		/* Readability overrides */
		.ai-playground, .ai-playground .card, .ai-playground .card .head, .ai-playground .card .body { color: #eaf2ff; }
		.ai-playground .muted { color: #cbd5e1; }
		.ai-playground .card h2, .ai-playground h2 { color: #f8fafc; }
		.ai-playground .bubble { color: #eef6ff; }
		.ai-playground input[type="text"], .ai-playground input[type="number"], .ai-playground select, .ai-playground textarea { color: #f1f5f9; }
		.ai-playground input::placeholder, .ai-playground textarea::placeholder { color: #b6c2d3; opacity: 1; }
		.ai-playground .btn.ghost { color: #f1f5f9; border-color: #334a63; }
		.ai-playground .story-output, .ai-playground .fact { color: #eaf2ff; }

		</style>
	</head>
<body>
	<?php
	include 'layout/header.php';
	?>

	<section class="hero">
		<div class="hero-content">
			<h1>AI Playground – Fun, Safe Demos for Kids</h1>
			<p>Try kid-friendly, offline-friendly AI mini apps in your browser. No account needed and no data saved. Learn by playing with chat, stories, emojis, animals, and patterns.</p>
			<a href="#chat" class="btn">Start Playing</a>
		</div>
	</section>

	<div class="container ai-playground">
		<div class="section">
			<p class="muted">Tip: Press <span class="kbd">Tab</span> to move between inputs. These mini-apps simulate AI using simple rules on your device.</p>
		</div>

		<section id="chat" class="card">
			<div class="head">
				<h2>Chat Buddy</h2>
				<span class="pill" title="Speak feature uses your browser's speechSynthesis if available">🗣️ Speak</span>
			</div>
			<div class="body">
				<p class="lead muted">Say hello to Spark, a friendly bot that understands greetings, animals, simple math, jokes, and more.</p>
				<div class="chatbox" id="chatbox" aria-live="polite" aria-label="Chat messages"></div>
				<div class="row" style="margin-top:10px; align-items:center;">
					<input id="chat-input" type="text" placeholder="Type a message like: what's 7 x 4?" aria-label="Message" />
					<button class="btn" id="send-btn" aria-label="Send message">Send</button>
					<button class="btn ghost" id="clear-chat" aria-label="Clear chat">Clear</button>
					<button class="btn secondary" id="speak-toggle" aria-pressed="false" aria-label="Toggle speak responses">Speak: Off</button>
				</div>
				<div class="quick" aria-label="Quick prompts">
					<button class="btn ghost" data-prompt="hello">hello</button>
					<button class="btn ghost" data-prompt="tell me a joke">joke</button>
					<button class="btn ghost" data-prompt="what sound does a lion make?">lion sound</button>
					<button class="btn ghost" data-prompt="what's 12 + 9?">math</button>
					<button class="btn ghost" data-prompt="what is your name?">your name</button>
				</div>
			</div>
		</section>

		<div class="grid" style="margin-top:18px;">
			<section id="story" class="card col-6">
				<div class="head">
					<h2>Silly Story Generator</h2>
					<span class="pill">🎲 Randomizer</span>
				</div>
				<div class="body">
					<p class="lead muted">Create a short story with your name, a theme, and a sprinkle of magic.</p>
					<div class="row">
						<input id="story-name" type="text" placeholder="Your name" aria-label="Your name" />
						<select id="story-genre" aria-label="Genre">
							<option value="adventure">Adventure</option>
							<option value="space">Space</option>
							<option value="fairy">Fairy Tale</option>
							<option value="ocean">Ocean</option>
							<option value="mystery">Mystery</option>
						</select>
						<label class="muted" for="story-length">Length</label>
						<input id="story-length" type="range" min="1" max="3" step="1" value="2" aria-label="Length" />
						<label style="display:flex; align-items:center; gap:8px;">
							<input id="story-moral" type="checkbox" /> add a moral
						</label>
					</div>
					<div class="row" style="margin-top:8px;">
						<button class="btn" id="story-make">Make Story</button>
						<button class="btn secondary" id="story-random">Surprise Me</button>
						<button class="btn ghost" id="story-speak">Read Aloud</button>
						<button class="btn ghost" id="story-copy">Copy</button>
					</div>
					<div id="story-output" class="story-output" aria-live="polite"></div>
				</div>
			</section>

			<section id="animals" class="card col-6">
				<div class="head">
					<h2>Animal Facts Q&A</h2>
					<span class="pill">🦁🐼🐬</span>
				</div>
				<div class="body">
					<p class="lead muted">Choose an animal and ask for a quick fact, habitat, diet, or what sound it makes.</p>
					<div class="row">
						<select id="animal-select" aria-label="Animal">
							<option value="lion">Lion</option>
							<option value="panda">Panda</option>
							<option value="dolphin">Dolphin</option>
							<option value="owl">Owl</option>
							<option value="elephant">Elephant</option>
							<option value="penguin">Penguin</option>
							<option value="frog">Frog</option>
							<option value="fox">Fox</option>
						</select>
						<select id="animal-topic" aria-label="Topic">
							<option value="fact">Fun fact</option>
							<option value="habitat">Habitat</option>
							<option value="diet">Diet</option>
							<option value="sound">Sound</option>
						</select>
						<button class="btn" id="animal-ask">Tell me!</button>
					</div>
					<div id="animal-answer" class="fact" style="margin-top:10px;" aria-live="polite"></div>
				</div>
			</section>
		</div>

		<div class="grid" style="margin-top:18px;">
			<section id="emoji" class="card col-6">
				<div class="head">
					<h2>Emoji Translator</h2>
					<span class="pill">😀➡️😊🐱🌟</span>
				</div>
				<div class="body">
					<p class="lead muted">Type a short sentence. Words get turned into emojis when possible.</p>
					<textarea id="emoji-input" placeholder="Type here e.g. I love cats and pizza!" aria-label="Text to translate"></textarea>
					<div class="row" style="margin-top:8px;">
						<button class="btn" id="emoji-translate">Translate</button>
						<button class="btn ghost" id="emoji-copy">Copy Result</button>
					</div>
					<div id="emoji-output" class="story-output mono" aria-live="polite"></div>
				</div>
			</section>

			<section id="painter" class="card col-6">
				<div class="head">
					<h2>Pattern Painter</h2>
					<span class="pill">🎨 Generative</span>
				</div>
				<div class="body">
					<p class="lead muted">Pick a mood and paint AI-like patterns on the canvas.</p>
					<div class="row">
						<select id="mood" aria-label="Mood">
							<option value="calm">Calm</option>
							<option value="happy">Happy</option>
							<option value="energetic">Energetic</option>
							<option value="night">Night</option>
						</select>
						<label for="density" class="muted">Density</label>
						<input id="density" type="range" min="200" max="1400" step="100" value="600" />
						<label for="seed" class="muted">Seed</label>
						<input id="seed" type="number" min="0" max="9999" value="0" />
						<button class="btn" id="paint">Paint</button>
						<button class="btn ghost" id="save">Save PNG</button>
					</div>
					<div class="canvas-wrap" style="margin-top:10px;">
						<canvas id="canvas" width="900" height="360" aria-label="Pattern canvas"></canvas>
					</div>
				</div>
			</section>
		</div>
	</div>
	
	<?php
	include 'layout/footer.php';
	?>

	<script>
		// Utilities
		const byId = (id) => document.getElementById(id);
		const rnd = (n) => Math.floor(Math.random() * n);
		const choice = (arr) => arr[rnd(arr.length)];

		// Speech synthesis helper (safe fallback)
		const speak = (text) => {
		  try {
			if (!window.speechSynthesis) return false;
			const u = new SpeechSynthesisUtterance(String(text).replace(/<[^>]+>/g, ''));
			u.rate = 1.05; u.pitch = 1.05;
			const voices = window.speechSynthesis.getVoices();
			const nice = voices.find(v => /child|kid|female|english/i.test(v.name)) || voices.find(v => /en/i.test(v.lang));
			if (nice) u.voice = nice;
			window.speechSynthesis.cancel();
			window.speechSynthesis.speak(u);
			return true;
		  } catch { return false; }
		};

		// --------------------------
		// Chat Buddy
		// --------------------------
		(function(){
		  const chatbox = byId('chatbox');
		  const input = byId('chat-input');
		  const sendBtn = byId('send-btn');
		  const clearBtn = byId('clear-chat');
		  const speakToggle = byId('speak-toggle');
		  let speakOn = false;

		  const animalSounds = {
			lion: 'roar', dog: 'woof', cat: 'meow', cow: 'moo', duck: 'quack',
			owl: 'hoot', snake: 'hiss', elephant: 'trumpet', frog: 'ribbit', fox: 'ring-ding-ding' // hehe
		  };

		  const jokes = [
			"Why did the robot cross the road? Because it was programmed by a chicken!",
			"I told my computer I needed a break—now it won't stop sending me KitKat ads.",
			"Why did the math book look sad? It had too many problems!",
			"What do you call a sleeping dinosaur? A dino-snore!"
		  ];

		  const greetings = [
			"Hi there! I'm Spark ✨ What's your name?",
			"Hello friend! Ready to learn and play?",
			"Hey hey! Nice to meet you!"
		  ];

		  const fallback = [
			"I'm still learning. Try asking about animals, jokes, or simple math!",
			"Hmm, not sure yet. You could ask: 'what sound does a lion make?' or 'tell me a joke'.",
			"I don't know that one. Try saying hello, or ask me to add numbers!"
		  ];

		  const addMsg = (text, who = 'bot') => {
			const row = document.createElement('div');
			row.className = `msg ${who}`;
			const avatar = document.createElement('div');
			avatar.className = 'avatar';
			avatar.textContent = who === 'bot' ? '⚡' : '🙂';
			const bubble = document.createElement('div');
			bubble.className = 'bubble';
			bubble.innerHTML = text;
			if (who === 'me') { row.appendChild(bubble); row.appendChild(avatar); }
			else { row.appendChild(avatar); row.appendChild(bubble); }
			chatbox.appendChild(row);
			chatbox.scrollTop = chatbox.scrollHeight;
			if (who === 'bot' && speakOn) speak(text);
		  };

		  const simpleMath = (msg) => {
			// supports forms like: what's 7 x 4, 12 + 9, 20-5, 8 divided by 2, 9 * 3
			const m = msg.toLowerCase().match(/(-?\d+)\s*(x|×|\*|\+|\-|−|—|—|÷|\/|divided by|times)\s*(-?\d+)/);
			if (!m) return null;
			let a = parseFloat(m[1]);
			let op = m[2];
			let b = parseFloat(m[3]);
			if (/divided by|÷|\//.test(op)) return `${a} ÷ ${b} = <b>${(b===0? '∞' : (a/b))}</b>`;
			if (/x|×|\*/.test(op)) return `${a} × ${b} = <b>${a*b}</b>`;
			if (/\+/.test(op)) return `${a} + ${b} = <b>${a+b}</b>`;
			if (/\-|−|—/.test(op)) return `${a} − ${b} = <b>${a-b}</b>`;
			return null;
		  };

		  const intentReply = (msg) => {
			const lower = msg.toLowerCase();

			// greetings
			if (/(^|\b)(hi|hello|hey|hiya)(\b|!|\.)/.test(lower)) return choice(greetings);

			// name
			const nameAsk = lower.match(/my name is\s+([a-z\-']+)/);
			if (nameAsk) return `Nice to meet you, <b>${nameAsk[1]}</b>!`;
			if (/what.*your name/.test(lower)) return "I'm <b>Spark</b>, your friendly chat buddy!";

			// animal sound
			const soundAsk = lower.match(/sound does a?\s*([a-z]+) make|what does a?\s*([a-z]+) say/);
			if (soundAsk) {
			  const animal = (soundAsk[1] || soundAsk[2] || '').toLowerCase();
			  if (animalSounds[animal]) return `A ${animal} goes <b>${animalSounds[animal]}!</b>`;
			}

			// jokes
			if (/joke/.test(lower)) return choice(jokes);

			// weather-like
			if (/weather/.test(lower)) return "I can't look outside, but every day is a great day to learn!";

			// math
			const math = simpleMath(lower);
			if (math) return math;

			// gratitude
			if (/thank/.test(lower)) return "You're welcome!";

			// goodbye
			if (/(goodbye|bye|see you)/.test(lower)) return "Bye! Come back soon. ✨";

			return choice(fallback);
		  };

		  const handleSend = () => {
			const text = input.value.trim();
			if (!text) return;
			addMsg(text, 'me');
			input.value = '';
			setTimeout(() => addMsg(intentReply(text), 'bot'), 250);
		  };

		  sendBtn.addEventListener('click', handleSend);
		  input.addEventListener('keydown', (e) => { if (e.key === 'Enter') handleSend(); });
		  clearBtn.addEventListener('click', () => { chatbox.innerHTML = ''; });
		  speakToggle.addEventListener('click', () => {
			speakOn = !speakOn;
			speakToggle.textContent = `Speak: ${speakOn ? 'On' : 'Off'}`;
			speakToggle.setAttribute('aria-pressed', String(speakOn));
		  });

		  document.querySelectorAll('.quick [data-prompt]').forEach(btn =>
			btn.addEventListener('click', () => { input.value = btn.dataset.prompt; input.focus(); })
		  );

		  // initial message
		  addMsg("Hi! I'm <b>Spark</b> ⚡ Ask me about animals, jokes, or math.");
		})();

		// --------------------------
		// Silly Story Generator
		// --------------------------
		(function(){
		  const nameEl = byId('story-name');
		  const genreEl = byId('story-genre');
		  const lengthEl = byId('story-length');
		  const moralEl = byId('story-moral');
		  const out = byId('story-output');
		  const btnMake = byId('story-make');
		  const btnRnd = byId('story-random');
		  const btnSpeak = byId('story-speak');
		  const btnCopy = byId('story-copy');

		  const names = ['Avery','Riley','Charlie','Jordan','Taylor','Kai','Parker','Rowan','Elliot','Skye'];
		  const sidekicks = ['a tiny dragon','a clever robot','a brave penguin','a friendly fox','a giggly wizard','a speedy dolphin'];
		  const places = {
			adventure: ['the Whispering Woods','Rainbow Ridge','Puzzle Peaks','Giggle Grove'],
			space: ['the Moon Market','Comet City','Nebula Nook','Saturn Station'],
			fairy: ['the Sparkle Forest','Candy Castle','Pixie Port','Marshmallow Meadow'],
			ocean: ['Coral Kingdom','Bubble Bay','Sea Star Station','Treasure Trench'],
			mystery: ['Foggy Falls','Shadow Street','Clue Corner','Riddle River']
		  };
		  const goals = {
			adventure: ['find a hidden map','help a lost puppy','discover a secret door','win the kindness crown'],
			space: ['fix a wobbly rocket','deliver glitter mail','teach aliens a dance','find a missing moon'],
			fairy: ['bake a sparkle pie','train butterflies','plant singing flowers','mend a broken rainbow'],
			ocean: ['clean up the reef','race playful seahorses','decode whale songs','find a sunken bell'],
			mystery: ['solve a cookie case','follow tiny footprints','unmask a giggling ghost','find a missing hat']
		  };
		  const endings = [
			'And everyone cheered so loudly that the stars twinkled brighter.',
			'They shared high-fives, tail waggles, and a plate of cookies.',
			'From that day, the town remembered that small friends can do big things.',
			'The adventure ended, but the giggles kept echoing for days.'
		  ];

		  function makeStory(opts={}){
			const name = (opts.name || nameEl.value || choice(names));
			const g = (opts.genre || genreEl.value || 'adventure');
			const len = Number(opts.length ?? lengthEl.value);
			const moral = opts.moral ?? moralEl.checked;
			const side = choice(sidekicks);
			const place = choice(places[g] || places.adventure);
			const goal = choice(goals[g] || goals.adventure);
			const adjs = ['brave','curious','kind','clever','silly','sparkly'];
			const mood = choice(['sunny','whispery','bouncy','twinkly','mysterious']);
			const open = `${name} woke up feeling ${choice(adjs)} and ${mood}.`;
			const meet = `Outside, ${name} met ${side} near ${place}.`;
			const quest = `Together they set out to ${goal}.`;
			const trouble = `But oh no—there was a tiny problem that needed a big heart!`;
			const solve = `By sharing, listening, and laughing, they solved it in the most ${choice(adjs)} way.`;
			const end = choice(endings);
			let story = '';
			if (len === 1) story = `${open} ${quest} ${end}`;
			if (len === 2) story = `${open} ${meet} ${quest} ${end}`;
			if (len >= 3) story = `${open} ${meet} ${quest} ${trouble} ${solve} ${end}`;
			if (moral) story += `\n\nMoral: Kindness and curiosity make strong teams.`;
			out.textContent = story;
			return story;
		  }

		  btnMake.addEventListener('click', () => makeStory());
		  btnRnd.addEventListener('click', () => {
			nameEl.value = choice(names);
			genreEl.value = choice(Object.keys(places));
			lengthEl.value = String(1 + rnd(3));
			moralEl.checked = Math.random() < .5;
			makeStory();
		  });
		  btnSpeak.addEventListener('click', () => speak(out.textContent));
		  btnCopy.addEventListener('click', async () => {
			try { await navigator.clipboard.writeText(out.textContent || ''); btnCopy.textContent = 'Copied!'; setTimeout(()=>btnCopy.textContent='Copy', 800); } catch {}
		  });

		  // initialize
		  makeStory({ length: 2, moral: false });
		})();

		// --------------------------
		// Animal Facts Q&A
		// --------------------------
		(function(){
		  const data = {
			lion: { fact: 'Lions live in groups called prides.', habitat: 'Grasslands and savannas of Africa.', diet: 'Carnivore: mostly large animals like zebras.', sound: 'ROAR!' },
			panda: { fact: 'Giant pandas spend up to 12 hours a day eating.', habitat: 'Bamboo forests of China.', diet: 'Herbivore: mostly bamboo.', sound: 'Munch munch (and bleats)!' },
			dolphin: { fact: 'Dolphins use clicks and whistles to talk.', habitat: 'Oceans worldwide, near coasts.', diet: 'Carnivore: fish and squid.', sound: 'Eeee-eee (click click)!' },
			owl: { fact: 'Owls can turn their heads up to 270 degrees.', habitat: 'Forests, deserts, and even cities.', diet: 'Carnivore: mice, insects, and small animals.', sound: 'Hoo-hoo!' },
			elephant: { fact: 'Elephants use their trunks to drink, smell, and grab.', habitat: 'Grasslands and forests in Africa and Asia.', diet: 'Herbivore: grasses, leaves, and fruit.', sound: 'Toot! (trumpet)' },
			penguin: { fact: 'Penguins waddle and slide on their bellies.', habitat: 'Mostly in the Southern Hemisphere; Antarctica!', diet: 'Carnivore: fish, krill, and squid.', sound: 'Honk-honk!' },
			frog: { fact: 'Frogs drink through their skin!', habitat: 'Ponds, wetlands, and rainforests.', diet: 'Carnivore: insects and small invertebrates.', sound: 'Ribbit!' },
			fox: { fact: 'Foxes have excellent hearing and can pounce into snow.', habitat: 'Forests, grasslands, and cities.', diet: 'Omnivore: berries, insects, and small animals.', sound: 'Yip-yip! (and many other sounds)' }
		  };
		  const select = byId('animal-select');
		  const topic = byId('animal-topic');
		  const btn = byId('animal-ask');
		  const ans = byId('animal-answer');

		  btn.addEventListener('click', () => {
			const a = select.value; const t = topic.value;
			const entry = data[a];
			if (!entry) return;
			ans.textContent = entry[t];
		  });

		  ans.textContent = 'Pick an animal and topic to see a fact!';
		})();

		// --------------------------
		// Emoji Translator
		// --------------------------
		(function(){
		  const input = byId('emoji-input');
		  const output = byId('emoji-output');
		  const btn = byId('emoji-translate');
		  const copyBtn = byId('emoji-copy');

		  const dict = {
			i:'😀', me:'😀', you:'🫵', we:'👨‍👩‍👧‍👦', they:'👥',
			love:'❤️', like:'👍', happy:'😊', sad:'😢', angry:'😠', laugh:'😂', fun:'🎉', game:'🎮', play:'🎲',
			cat:'🐱', cats:'🐱', dog:'🐶', dogs:'🐶', lion:'🦁', panda:'🐼', dolphin:'🐬', fish:'🐟', bird:'🐦', owl:'🦉', fox:'🦊', frog:'🐸', elephant:'🐘', penguin:'🐧',
			sun:'☀️', moon:'🌙', star:'⭐', stars:'🌟', sky:'🌌', ocean:'🌊', water:'💧', fire:'🔥', tree:'🌳', flower:'🌸',
			pizza:'🍕', cake:'🍰', cookie:'🍪', fruit:'🍎', ice:'🍦', candy:'🍬',
			hi:'👋', hello:'👋', bye:'👋', yes:'✅', no:'❌', wow:'😮', cool:'😎',
			run:'🏃', fast:'⚡', slow:'🐢', sleep:'😴', music:'🎵', dance:'💃', book:'📖', school:'🏫', rocket:'🚀'
		  };

		  function translate(text){
			const words = text.split(/(\s+)/); // keep spaces
			return words.map(w => {
			  const clean = w.toLowerCase().replace(/[^a-z']/g,'');
			  if (dict[clean]) return w.replace(new RegExp(clean, 'i'), dict[clean]);
			  return w;
			}).join('');
		  }

		  btn.addEventListener('click', ()=>{ output.textContent = translate(input.value || 'Hello friend! I love pizza and dogs.'); });
		  copyBtn.addEventListener('click', async () =>{
			try { await navigator.clipboard.writeText(output.textContent || ''); copyBtn.textContent='Copied!'; setTimeout(()=>copyBtn.textContent='Copy Result', 800); } catch {}
		  });

		  output.textContent = 'Type a sentence and press Translate!';
		})();

		// --------------------------
		// Pattern Painter (Generative Canvas)
		// --------------------------
		(function(){
		  const canvas = byId('canvas');
		  const ctx = canvas.getContext('2d');
		  const moodEl = byId('mood');
		  const densityEl = byId('density');
		  const seedEl = byId('seed');
		  const paintBtn = byId('paint');
		  const saveBtn = byId('save');

		  function seeded(seed){
			let s = (Number(seed) || 0) + 1;
			return function(){
			  // xorshift-ish
			  s ^= s << 13; s ^= s >>> 17; s ^= s << 5;
			  return Math.abs(s) / 0x7fffffff;
			}
		  }

		  function paletteByMood(mood){
			switch(mood){
			  case 'calm': return ['#0ea5e9','#38bdf8','#06b6d4','#22d3ee','#a5f3fc'];
			  case 'happy': return ['#22c55e','#84cc16','#f59e0b','#f97316','#eab308'];
			  case 'energetic': return ['#ef4444','#f97316','#f43f5e','#a855f7','#06b6d4'];
			  case 'night': return ['#0ea5e9','#1e3a8a','#0f172a','#334155','#64748b'];
			  default: return ['#60a5fa','#a78bfa','#22c55e','#f59e0b','#f43f5e'];
			}
		  }

		  function paint(){
			const mood = moodEl.value;
			const den = Number(densityEl.value);
			const pal = paletteByMood(mood);
			const rand = seeded(seedEl.value);

			// background gradient
			const g = ctx.createLinearGradient(0,0,canvas.width,canvas.height);
			g.addColorStop(0, '#050a14');
			g.addColorStop(1, mood==='night' ? '#0b1220' : '#0a1628');
			ctx.fillStyle = g; ctx.fillRect(0,0,canvas.width,canvas.height);

			// Draw flowing curves
			for (let i=0; i<6; i++) {
			  ctx.beginPath();
			  const hue = pal[i % pal.length];
			  ctx.strokeStyle = hue + Math.floor(120 + rand()*100).toString(16);
			  ctx.lineWidth = 1 + rand()*2;
			  let x = -50, y = rand()*canvas.height;
			  ctx.moveTo(x, y);
			  const step = 30 + rand()*50;
			  while (x < canvas.width + 50) {
				const cx = x + step/2 + rand()*40;
				const cy = y + (rand()-.5)*100;
				const nx = x + step;
				const ny = y + (rand()-.5)*100;
				ctx.quadraticCurveTo(cx, cy, nx, ny);
				x = nx; y = ny;
			  }
			  ctx.stroke();
			}

			// Sprinkle circles
			for (let i=0; i<den; i++) {
			  const x = rand()*canvas.width;
			  const y = rand()*canvas.height;
			  const r = 0.6 + rand()*2.6;
			  ctx.beginPath();
			  ctx.arc(x, y, r, 0, Math.PI*2);
			  ctx.fillStyle = pal[Math.floor(rand()*pal.length)];
			  ctx.globalAlpha = 0.55 + rand()*0.35;
			  ctx.fill();
			}
			ctx.globalAlpha = 1;

			// Geometric accents
			for (let i=0; i<60; i++){
			  const x = rand()*canvas.width;
			  const y = rand()*canvas.height;
			  const w = 3 + rand()*15;
			  const h = 3 + rand()*15;
			  ctx.fillStyle = pal[Math.floor(rand()*pal.length)];
			  ctx.fillRect(x, y, w, h);
			}
		  }

		  paintBtn.addEventListener('click', paint);
		  saveBtn.addEventListener('click', () => {
			const link = document.createElement('a');
			link.download = `pattern-${moodEl.value}-${Date.now()}.png`;
			link.href = canvas.toDataURL('image/png');
			link.click();
		  });

		  // initial paint
		  paint();
		})();
	</script>
</body>
</html>
