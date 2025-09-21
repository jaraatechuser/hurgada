<svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <!-- Sea background gradient -->
    <defs>
        <linearGradient id="seaGradient" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" style="stop-color:#87CEEB;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#4682B4;stop-opacity:1" />
        </linearGradient>
        <linearGradient id="coralGradient" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" style="stop-color:#FF6B6B;stop-opacity:1" />
            <stop offset="50%" style="stop-color:#FF8E8E;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#FFB3B3;stop-opacity:1" />
        </linearGradient>
        <linearGradient id="coralGradient2" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" style="stop-color:#FFA500;stop-opacity:1" />
            <stop offset="50%" style="stop-color:#FFB84D;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#FFCC80;stop-opacity:1" />
        </linearGradient>
    </defs>
    
    <!-- Sea background -->
    <rect width="316" height="316" fill="url(#seaGradient)"/>
    
    <!-- Sea floor -->
    <path d="M0 280 Q80 260 160 270 T316 280 L316 316 L0 316 Z" fill="#8B4513" opacity="0.7"/>
    
    <!-- Large coral formations -->
    <path d="M50 250 C40 200 60 180 80 200 C100 180 120 200 100 250 C90 280 60 280 50 250 Z" fill="url(#coralGradient)"/>
    <path d="M200 260 C190 210 210 190 230 210 C250 190 270 210 250 260 C240 290 210 290 200 260 Z" fill="url(#coralGradient2)"/>
    <path d="M120 270 C110 220 130 200 150 220 C170 200 190 220 170 270 C160 300 130 300 120 270 Z" fill="url(#coralGradient)"/>
    
    <!-- Smaller coral branches -->
    <path d="M30 240 C25 220 35 210 45 220 C55 210 65 220 55 240 C50 250 35 250 30 240 Z" fill="url(#coralGradient2)"/>
    <path d="M250 250 C245 230 255 220 265 230 C275 220 285 230 275 250 C270 260 255 260 250 250 Z" fill="url(#coralGradient)"/>
    <path d="M140 240 C135 220 145 210 155 220 C165 210 175 220 165 240 C160 250 145 250 140 240 Z" fill="url(#coralGradient2)"/>
    
    <!-- Fish swimming -->
    <g transform="translate(80, 120)">
        <ellipse cx="0" cy="0" rx="15" ry="8" fill="#FFD700"/>
        <path d="M-15 0 L-25 -5 L-20 0 L-25 5 Z" fill="#FFD700"/>
        <circle cx="5" cy="-2" r="2" fill="#000"/>
        <path d="M-5 -3 Q-8 -5 -5 -7" stroke="#000" stroke-width="1" fill="none"/>
    </g>
    
    <g transform="translate(200, 100)">
        <ellipse cx="0" cy="0" rx="12" ry="6" fill="#FF69B4"/>
        <path d="M-12 0 L-20 -4 L-16 0 L-20 4 Z" fill="#FF69B4"/>
        <circle cx="4" cy="-1" r="1.5" fill="#000"/>
        <path d="M-4 -2 Q-6 -3 -4 -4" stroke="#000" stroke-width="0.8" fill="none"/>
    </g>
    
    <g transform="translate(150, 80)">
        <ellipse cx="0" cy="0" rx="10" ry="5" fill="#00CED1"/>
        <path d="M-10 0 L-16 -3 L-13 0 L-16 3 Z" fill="#00CED1"/>
        <circle cx="3" cy="-1" r="1" fill="#000"/>
        <path d="M-3 -1.5 Q-5 -2 -3 -2.5" stroke="#000" stroke-width="0.6" fill="none"/>
    </g>
    
    <!-- Seaweed -->
    <path d="M20 280 Q20 200 25 180 Q30 160 35 180 Q40 200 40 280" stroke="#228B22" stroke-width="3" fill="none"/>
    <path d="M280 280 Q280 200 285 180 Q290 160 295 180 Q300 200 300 280" stroke="#228B22" stroke-width="3" fill="none"/>
    <path d="M100 280 Q100 220 105 200 Q110 180 115 200 Q120 220 120 280" stroke="#32CD32" stroke-width="2" fill="none"/>
    
    <!-- Bubbles -->
    <circle cx="60" cy="60" r="3" fill="#FFFFFF" opacity="0.6"/>
    <circle cx="80" cy="40" r="2" fill="#FFFFFF" opacity="0.5"/>
    <circle cx="40" cy="80" r="2.5" fill="#FFFFFF" opacity="0.6"/>
    <circle cx="250" cy="70" r="2" fill="#FFFFFF" opacity="0.5"/>
    <circle cx="270" cy="50" r="3" fill="#FFFFFF" opacity="0.6"/>
    <circle cx="220" cy="90" r="2.5" fill="#FFFFFF" opacity="0.5"/>
    
    <!-- Sun rays from surface -->
    <path d="M158 0 L160 20 M158 0 L150 15 M158 0 L166 15" stroke="#FFD700" stroke-width="2" opacity="0.8"/>
    <path d="M158 0 L140 10 M158 0 L176 10" stroke="#FFD700" stroke-width="1.5" opacity="0.6"/>
</svg>
