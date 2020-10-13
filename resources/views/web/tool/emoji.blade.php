@extends('resources.views.site.layout.tool')
{{--https://unicode.org/Public/emoji/13.0/--}}
<style>
    .label-emoji {
        font-size: 30px;
        padding: 10px;
    }

    .label-emoji:hover {
        cursor: pointer;
    }

    .form-select-icon {
        position: fixed;
    }

    .item-emoji {
        display: inline-block;
    }

    .collection-fixed {
        position: fixed;
    }
</style>
@section('content')
    <div class="row list-icon-emoji">
        <div class="col s3">
            <div class="collection-fixed">
                <div class="collection">
                    <?php
                    $file = @fopen($file_name, "r");
                    while (!feof($file)) {
                        $line = fgets($file);
                        $active = '';
                        if (strpos($line, '# group:') !== false) {
                            $slug = \Illuminate\Support\Str::slug($line);
                            $href = base_url('tool/icon-facebook?active='.$slug.'#' . $slug);
                            $active = request()->input('active') == $slug ? 'active' : '';
                            echo '<a href="' . $href . '" class="collection-item ' . $active . '">↪ ';
                            echo str_replace('# group:', '', $line);
                            echo '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col s9">
            <blockquote>
                Click vào icon để copy.
            </blockquote>

            <?php
            $file = @fopen($file_name, "r");
            $text = '';
            while (!feof($file)) {
                $line = fgets($file);
                if (strpos($line, '# group:') !== false) {
                    echo '<h4 id="' . \Illuminate\Support\Str::slug($line) . '">';
                    echo '<a href="' . base_url('tool/icon-facebook#' . \Illuminate\Support\Str::slug($line)) . '">';
                    echo str_replace('# group:', '', $line);
                    echo '</a>';
                    echo '</h4>';
                } elseif (strpos($line, '# subgroup:') !== false) {
                    echo '<h6 id="' . \Illuminate\Support\Str::slug(
                            $line
                        ) . '" style="margin-top: 20px; font-size: 10px">';
                    echo '<a href="' . base_url('tool/icon-facebook#' . \Illuminate\Support\Str::slug($line)) . '">';
                    echo '- ' . trans('common.emoji.' . trim(str_replace('# subgroup: ', '', $line)));
                    echo '</a>';
                    echo '</h6>';
                } else {
                    $icons = explode(' ;', $line);
                    $icons = preg_split('/\s+/', $icons[0]);

                    if (!empty($icons[0])) {
                        echo '<div class="item-emoji">';
                        $text = '';
                        foreach ($icons as $key => $icon) {
                            if (empty($icon)) {
                                continue;
                            }
                            $text .= '&#x' . $icon . ';';
                        }
                        echo '<span data-clipboard-text="' . $text . '" onclick="M.toast({html: \'Đã copy ' . $text . ' \'})" title="Click copy" class="label-emoji clipboard" data-parent="" data-sub-parent="" data-text="' . $text . '">' . $text . '</span>';
                        echo '</div>';
                    }
                }
            }
            fclose($file)
            ?>
        </div>

    </div>
@endsection
