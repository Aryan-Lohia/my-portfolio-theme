<?php
/**
 * Tech Stack Section - Bento-style grid with official SVG logos
 *
 * @package My_Portfolio
 */

// Map tech labels to Simple Icons CDN slugs (https://cdn.simpleicons.org/{slug}/{color})
$icon_map = array(
    'React' => 'react',
    'Next.js' => 'nextdotjs',
    'Flutter' => 'flutter',
    'Node.js' => 'nodedotjs',
    'Express' => 'express',
    'TypeScript' => 'typescript',
    'JavaScript' => 'javascript',
    'Python' => 'python',
    'Flask' => 'flask',
    'PHP' => 'php',
    'C++ (MT5)' => 'cplusplus',
    'PostgreSQL' => 'postgresql',
    'MongoDB' => 'mongodb',
    'Firebase' => 'firebase',
    'AWS RDS' => 'amazonaws',
    'Firebase Auth' => 'firebase',
    'AWS Cognito' => 'amazonaws',
    'AWS' => 'amazonaws',
    'Vercel' => 'vercel',
    'GitHub' => 'github',
    'Hugging Face' => 'huggingface',
    'Ollama' => 'ollama',
    'MediaPipe' => 'mediapipe',
    'Deepgram' => 'deepgram',
    'Gemini' => 'googlegemini',
);
$icon_color = 'FFC107'; // Primary yellow

$categories = array(
    'Frontend' => array('React', 'Next.js'),
    'Mobile' => array('Flutter'),
    'Backend' => array('Node.js', 'Express', 'TypeScript', 'JavaScript', 'Python', 'Flask', 'PHP', 'C++ (MT5)'),
    'Databases' => array('PostgreSQL', 'MongoDB', 'Firebase', 'AWS RDS'),
    'Auth & Security' => array('Firebase Auth', 'AWS Cognito'),
    'Cloud & DevOps' => array('AWS', 'Vercel', 'GitHub'),
    'AI & Computer Vision' => array('Hugging Face', 'Ollama', 'MediaPipe', 'Deepgram', 'Gemini'),
);
$icon_map['N8N'] = 'n8n';
?>

<section id="tech-stack" class="section-reveal section-tech relative section-padding">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header">
            <h2 class="section-title">Tech <span class="gold">stack</span></h2>
        </div>
        <div class="tech-stack-grid">
            <?php foreach ($categories as $cat_name => $items) : ?>
                <div class="tech-stack-card">
                    <h3 class="tech-stack-category"><?php echo esc_html($cat_name); ?></h3>
                    <div class="tech-stack-items">
                        <?php foreach ($items as $label) :
                            $slug = isset($icon_map[$label]) ? $icon_map[$label] : null;
                            $is_aws = ( $slug === 'amazonaws' || $label === 'AWS' || $label === 'AWS RDS' || $label === 'AWS Cognito' );
                            $icon_url = ( $slug && ! $is_aws ) ? 'https://cdn.simpleicons.org/' . $slug . '/' . $icon_color : null;
                        ?>
                            <div class="tech-stack-item">
                                <?php if ( $is_aws ) : ?>
                                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/amazonaws.svg" alt="<?php echo esc_attr($label); ?>" class="tech-stack-icon tech-stack-icon-aws" width="22" height="22" loading="lazy" />
                                <?php elseif ($icon_url) : ?>
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($label); ?>" class="tech-stack-icon" width="22" height="22" loading="lazy" />
                                <?php else : ?>
                                    <span class="tech-stack-badge"><?php echo esc_html(mb_substr(trim($label), 0, 1)); ?></span>
                                <?php endif; ?>
                                <span><?php echo esc_html($label); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- AI Card - LLMs, Agents, Automation -->
            <div class="tech-stack-card tech-stack-card-ai">
                <h3 class="tech-stack-category">AI</h3>
                <div class="tech-stack-items">
                    <?php
                    $ai_items = array('Write LLMs', 'AI Agents & Automation', 'AI Wrappers', 'N8N');
                    foreach ( $ai_items as $label ) :
                        $slug = isset($icon_map[$label]) ? $icon_map[$label] : null;
                        $icon_url = $slug ? 'https://cdn.simpleicons.org/' . $slug . '/' . $icon_color : null;
                    ?>
                        <div class="tech-stack-item">
                            <?php if ( $icon_url ) : ?>
                                <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($label); ?>" class="tech-stack-icon" width="22" height="22" loading="lazy" />
                            <?php else : ?>
                                <span class="tech-stack-badge"><?php echo esc_html(mb_substr(trim($label), 0, 1)); ?></span>
                            <?php endif; ?>
                            <span><?php echo esc_html($label); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
