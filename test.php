<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
        .grid {
            display: flex;
           /* flex-direction: column; /* standard row */
            flex-wrap: wrap; /* standard nowrap */
        }

        .box {
            flex-grow: 1; /* standard 0 */
            flex-shrink: 1; /* standard 1 */
            flex-basis: auto; /* standard auto */

            border: 1px solid brown;
            background: lightyellow;
        }

        @media (min-width: 600px) {
            .box {
                flex-basis: 50%;
            }

                border: 10px red;
            }
    </style>
</head>
<body>
    <div class="grid">
        <div class="box box--xlarge">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem repudiandae earum at rem, quas ea temporibus voluptatum repellat amet quos praesentium, dignissimos est obcaecati animi ut? Labore distinctio vel facilis.
        </div>
        <div class="box box--small">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem repudiandae earum at rem, quas ea temporibus voluptatum repellat amet quos praesentium, dignissimos est obcaecati animi ut? Labore distinctio vel facilis.
        </div>
        <div class="box box--small">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam minus incidunt modi temporibus qui fugiat eligendi eos sint praesentium sunt quaerat tempore corporis mollitia voluptatem unde libero facere, quidem ad?
        </div>
        <div class="box box--small">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere odio excepturi iure dicta temporibus, neque tempore aperiam. Mollitia id unde cum laudantium eveniet tempore commodi reprehenderit adipisci, iusto non voluptatum.
        </div>
        <div class="box box--large">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere odio excepturi iure dicta temporibus, neque tempore aperiam. Mollitia id unde cum laudantium eveniet tempore commodi reprehenderit adipisci, iusto non voluptatum.
        </div>
        <div class="box box--large">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere odio excepturi iure dicta temporibus, neque tempore aperiam. Mollitia id unde cum laudantium eveniet tempore commodi reprehenderit adipisci, iusto non voluptatum.
        </div>
    </div>
</body>
</html>