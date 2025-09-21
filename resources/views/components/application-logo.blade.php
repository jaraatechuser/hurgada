<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <!-- Pink heart gradients -->
    <defs>
        <linearGradient id="heartGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#FF69B4;stop-opacity:1" />
            <stop offset="50%" style="stop-color:#FF1493;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#DC143C;stop-opacity:1" />
        </linearGradient>
        <linearGradient id="heartGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#FFB6C1;stop-opacity:1" />
            <stop offset="50%" style="stop-color:#FF69B4;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#FF1493;stop-opacity:1" />
        </linearGradient>
        <radialGradient id="heartShine" cx="30%" cy="30%">
            <stop offset="0%" style="stop-color:#FFFFFF;stop-opacity:0.8" />
            <stop offset="70%" style="stop-color:#FFFFFF;stop-opacity:0.3" />
            <stop offset="100%" style="stop-color:#FFFFFF;stop-opacity:0" />
        </radialGradient>
    </defs>
    
    <!-- Background circle with soft pink -->
    <circle cx="50" cy="50" r="48" fill="#FDF2F8" stroke="#FCE7F3" stroke-width="2"/>
    
    <!-- Main heart shape -->
    <path d="M50 85 C50 85 20 60 20 40 C20 25 30 15 45 15 C50 15 50 25 50 25 C50 25 50 15 55 15 C70 15 80 25 80 40 C80 60 50 85 50 85 Z" 
          fill="url(#heartGradient)" 
          stroke="#FF1493" 
          stroke-width="1.5"/>
    
    <!-- Heart shine/highlight -->
    <path d="M50 85 C50 85 20 60 20 40 C20 25 30 15 45 15 C50 15 50 25 50 25 C50 25 50 15 55 15 C70 15 80 25 80 40 C80 60 50 85 50 85 Z" 
          fill="url(#heartShine)"/>
    
    <!-- Small decorative hearts around the main heart -->
    <g opacity="0.6">
        <path d="M25 25 C25 25 20 20 20 15 C20 12 22 10 25 10 C26 10 26 12 26 12 C26 12 26 10 27 10 C30 10 32 12 32 15 C32 20 25 25 25 25 Z" 
              fill="url(#heartGradient2)" 
              transform="scale(0.3) translate(50, 50)"/>
        <path d="M75 20 C75 20 70 15 70 10 C70 7 72 5 75 5 C76 5 76 7 76 7 C76 7 76 5 77 5 C80 5 82 7 82 10 C82 15 75 20 75 20 Z" 
              fill="url(#heartGradient2)" 
              transform="scale(0.3) translate(200, 50)"/>
        <path d="M15 70 C15 70 10 65 10 60 C10 57 12 55 15 55 C16 55 16 57 16 57 C16 57 16 55 17 55 C20 55 22 57 22 60 C22 65 15 70 15 70 Z" 
              fill="url(#heartGradient2)" 
              transform="scale(0.25) translate(40, 200)"/>
        <path d="M85 75 C85 75 80 70 80 65 C80 62 82 60 85 60 C86 60 86 62 86 62 C86 62 86 60 87 60 C90 60 92 62 92 65 C92 70 85 75 85 75 Z" 
              fill="url(#heartGradient2)" 
              transform="scale(0.25) translate(280, 200)"/>
    </g>
    
    <!-- Sparkle effects -->
    <g opacity="0.8">
        <circle cx="30" cy="30" r="1.5" fill="#FFFFFF">
            <animate attributeName="opacity" values="0.8;0.3;0.8" dur="2s" repeatCount="indefinite"/>
        </circle>
        <circle cx="70" cy="25" r="1" fill="#FFFFFF">
            <animate attributeName="opacity" values="0.3;0.8;0.3" dur="1.5s" repeatCount="indefinite"/>
        </circle>
        <circle cx="20" cy="60" r="1.2" fill="#FFFFFF">
            <animate attributeName="opacity" values="0.8;0.2;0.8" dur="2.5s" repeatCount="indefinite"/>
        </circle>
        <circle cx="80" cy="65" r="1" fill="#FFFFFF">
            <animate attributeName="opacity" values="0.2;0.8;0.2" dur="1.8s" repeatCount="indefinite"/>
        </circle>
    </g>
</svg>
