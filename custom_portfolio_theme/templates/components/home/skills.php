<!-- Skill Start -->
<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?= $args['bg_title'] ?></h1>
            <h1 class="position-absolute text-uppercase theme-color mobileFont"><?= $args['title'] ?></h1>
        </div>
        <div class="contain">
            <canvas id="myChart" width="600" height="400"></canvas>
        </div>
        <!-- Get data from skills and pass to JS -->
        <?php
            $skill_titles = [];
            $skill_numbers = [];
            $skill_colors = [];

            foreach($args['list'] as $key => $skill){
                $id = $skill[ 'ID' ];
                $skill_pods = pods( 'skill', $id );
                array_push($skill_titles, get_the_title( $id ));
                array_push($skill_numbers, $skill_pods->field('skill_number'));
                array_push($skill_colors, $skill_pods->field('skill_color'));
            }

            wp_register_script('chart-js',  'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js');

            wp_enqueue_script('chart-js');

            wp_register_script('chart-custom-js',  $args['baseUrl'] . '/assets/js/chart.js');

            wp_enqueue_script('chart-custom-js');

            wp_localize_script('chart-custom-js', 'skillVariables', [
                'skill_chart_title' => $args['chart_title'],
                'skill_titles' => $skill_titles,
                'skill_numbers' => $skill_numbers,
                'skill_colors' => $skill_colors
            ]);
        ?>
    </div>
</div>
<!-- Skill End -->