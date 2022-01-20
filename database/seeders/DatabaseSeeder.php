<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Wisnu sukmana putra',
            'username' => 'Wisnu-shaputra',
            'email' => 'wisnushaputra636@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'mamat geming',
            'username' => 'mamat-geming',
            'email' => 'mamatgeming@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'pak amir',
            'username' => 'pak-amir',
            'email' => 'pakamir@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Category::create([
            'name' => 'sejarah',
            'slug' => 'sejarah'
        ]);

        Category::create([
            'name' => 'programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'judul postingan pertama',
            'slug' => 'judul-postingan-pertama',
            'excerpt' => 'excerpt postingan pertama',
            'category_id' => 1,
            'user_id' => 1,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
            
        ]);

        Post::create([
            'title' => 'judul postingan kedua',
            'slug' => 'judul-postingan-kedua',
            'excerpt' => 'excerpt postingan kedua',
            'category_id' => 2,
            'user_id' => 2,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);

        Post::create([
            'title' => 'judul postingan tiga',
            'slug' => 'judul-postingan-tiga',
            'excerpt' => 'excerpt postingan tiga',
            'category_id' => 1,
            'user_id' => 2,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);

        Post::create([
            'title' => 'judul postingan empat',
            'slug' => 'judul-postingan-empat',
            'excerpt' => 'excerpt postingan empat',
            'category_id' => 3,
            'user_id' => 1,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);

        Post::create([
            'title' => 'judul postingan lima',
            'slug' => 'judul-postingan-lima',
            'excerpt' => 'excerpt postingan lima',
            'category_id' => 1,
            'user_id' => 3,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);

        Post::create([
            'title' => 'judul postingan enam',
            'slug' => 'judul-postingan-enam',
            'excerpt' => 'excerpt postingan enam',
            'category_id' => 1,
            'user_id' => 2,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);

        Post::create([
            'title' => 'judul postingan tujuh',
            'slug' => 'judul-postingan-tujuh',
            'excerpt' => 'excerpt postingan tujuh',
            'category_id' => 3,
            'user_id' => 3,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);

        Post::create([
            'title' => 'judul postingan delapan',
            'slug' => 'judul-postingan-delapan',
            'excerpt' => 'excerpt postingan delapan',
            'category_id' => 3,
            'user_id' => 2,
            'body' => 'Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

            Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
            
            Our tint-color() and shade-color() functions use mix() alongside our $theme-color-interval variable, which specifies a stepped percentage value for each mixed color we produce. See the scss/_functions.scss and scss/_variables.scss files for the full source code.'
        ]);
    }
}
