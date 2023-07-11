@extends('layouts.app')

@section('content')

    <div class="flex flex-col flex-wrap items-center mt-10 mb-10 ">
        <div class="flex flex-col bg-gray-200 bg-opacity-75 rounded-lg p-4 items-center">
            <h2 class="text-2xl font-bold text-center underline">Classic French Loaf</h2>
            <img class="mt-4 max-w-xl" src="{{ asset('images/final-loaf.jpeg') }}" alt="Final Loaf of Bread">
            <p class="mt-4 text-sm">Note: This recipe can be created either with a starter or with standard yeast. In this
                example, we'll be using standard yeast.</p>
        </div>
    </div>

    <div class="flex flex-col items-center mt-10 mb-10">
        <div class="bg-gray-200 bg-opacity-75 rounded-lg p-4">
            <h3 class="text-xl font-bold text-center">What You'll Need</h3>
            <ul class="mt-4 list-disc list-inside">
                <li>*A quality baking/cooking scale is recommended*</li>
                <li>Bread flour -600 grams</li>
                <li>Salt - 12 to 19 grams, per taste</li>
                <li>Yeast - 1/4 oz or 1 packet of instant dry yeast</li>
                <li>Water - 2 cups/~450 grams</li>
                <li>Pyrex measuring cup</li>
                <li>Large Pyrex mixing bowl or comparable vessel</li>
                <li>Proofing Basket</li>
                <li>Large (3 Qt) Cast Iron Dutch Oven</li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col items-center mt-10 mb-10">
        <div class="bg-gray-200 bg-opacity-75 rounded-lg p-4">
            <h3 class="text-xl font-bold text-center">Instructions</h3>
            <ol class="mt-4 list-disc list-inside">
                <li>Weigh out 600 grams of bread flour (I recommend King Arthur brand). Place weighed flour in Pyrex mixing
                    bowl. At this point it's a good idea to whisk the flour to ensure there are no clumps.</li>
                <li>Add salt to the flour bowl. Whisk is up to ensure it's evenly distributed.</li>
                <li>Add water to separate Pyrex measuring cup - water temperature should be slightly warm but not too hot.
                </li>
                <li>Add yeast to water and stir it up so there are no visible clumps. Let it sit for a minute.</li>
                <li>Combine yeast water with flour/salt mixture.</li>
                <li>Stir together until they are well combined. Don't worry if it looks like you don't have enough water,
                    keep
                    mixing and it will eventually come together.</li>
                <li>After around 5 minutes of stirring, you should be left with a sticky glob of dough:</li>
                <img class="m-4 max-w-lg mx-auto" src="{{ asset('images/dough-proof.jpeg') }}" alt="Dough Glob">
                <li>Cover your mixing bowl with a loose towel and let it sit on the counter for 2 hours.</li>
                <li>At the 2 hour mark your dough should have risen quite a bit. Go ahead and punch it down, knead out any
                    significant air bubbles and form back into a ball in the bowl.</li>
                <li>At this point you have 2 options:
                    <ul class="list-decimal mx-10">
                        <li>Cover bread back up and wait another 2 hours; or</li>
                        <li>Cover bread and place in fridge for up to 18 hours (this will enable a slower rise so you
                            can
                            attend to it later).</li>
                    </ul>
                </li>
                <li>After your choice in prior step, turnout dough onto lightly floured countertop and shape into a ball.
                </li>
                <li>Preheat oven to 480 Degrees for up to 1 hour with dutch oven inside (fill dutch oven with a little
                    water).</li>
                <li>Place shaped ball into proofing basket, allow it settle while oven is preheating. By the time the oven
                    is
                    preheated, your proofing basket dough should hopefully have risen as follows:</li>
                <img class="m-4 max-w-lg mx-auto" src="{{ asset('images/proof-basket.jpeg') }}" alt="Dough Rise">
                <li>Carefully remove dough from proofing basket and place gently in Cast Iron pot. Place lid on pot and put
                    it
                    on the center oven rack.</li>
                <li>Lower temperature to 435 Degrees and bake with lid on for 30 minutes.</li>
                <li>Remove the lid from the pot and continue to bake for an additional 15 minutes.</li>
                <li>Remove bread from the oven and place on cooling rack. Allow to fully cool (about 2 hours) before cutting
                    into the loaf.</li>
                <li>Enjoy your homemade bread!</li>
            </ol>
        </div>
    </div>

    <div class="flex flex-col flex-wrap items-center mt-10 mb-10">
        <div class="bg-gray-200 bg-opacity-75 rounded-lg p-4">
            <h4 class="text-xl font-bold text-center">Tips and Tricks</h4>
            <ul class="mt-4 list-disc list-inside">
                <li>You can adjust the time for the final lid off bake up a bit if you like a much crispier crust.</li>
                <li>Use a piece of parchment paper to line the bottom of the cast iron pot. This will help prevent the loaf
                    from
                    sticking to the bottom.</li>
                <li>You can use the parchment paper to transport the dough ball into the hot pot!</li>
                <li>Experiment with different types of flour. Different brands have different attributes.</li>
            </ul>
        </div>
    </div>


@endsection
