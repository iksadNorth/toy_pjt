<?php

namespace Toypjt\Statics\Segments;

class Tab
{
    public static function render()
    {
        $when = $_GET['when'];

        $tabId = '${tabId}';
        $idx = '${i}';
        $value = '${tab_elements[i]}';
        return <<<EOD
        <div>
            <style>
            :root {
                --tab-color: gray;
                --tab-color-active: green;
                --tab-gap: 20px;
            }

            .tabs {
                display: flex;
                justify-content: center;

                list-style: none;
                padding: 0;

                border-bottom: 1px solid var(--tab-color);
            }
        
            .tab {
                cursor: pointer;
                padding: 10px;
                margin-right: 5px;
            }
        
            .tabs > .content {
                cursor: pointer;
                padding: 10px;
                margin: 0px var(--tab-gap);

                color: var(--tab-color);
            }
        
            .tabs > .content.active {
                display: block;
                border-bottom: 1px solid var(--tab-color-active);
            }
            </style>
        
            <ul id="tabs" class="tabs"></ul>
        
            <script>
                function changePage(tabId) {
                    // 모든 content 숨기기
                    var contents = document.querySelectorAll('.content');
                    contents.forEach(function(content) {
                        content.classList.remove('active');
                    });
                
                    // 클릭한 tab에 해당하는 content 보이기
                    var selectedContent = document.getElementById(tabId);
                    if (selectedContent) {
                        selectedContent.classList.add('active');
                    }

                    window.location.href = `
        EOD . Tab::replaceUrlParam("when", $tabId) . <<<EOD
                    `;
                }

                var tabs = $('#tabs');
                var tab_elements = ['월','화','수','목','금','토','일',];

                for (var i = 0; i < tab_elements.length; i+=1) {
                    var child = `<li id="tab$idx" class="content" onclick="changePage('tab$idx')">$value</li>`;
                    tabs.append(child)

                    if (`tab$idx` == '$when') {
                        $("#tabs li:last-child").addClass("active");
                    }
                }
            </script>
        </div>
        EOD;
    }

    public static function replaceUrlParam($keyName, $newValue){
        $url = $_SERVER["REQUEST_URI"];  
          
        $pattern = "/{$keyName}=[^&]+(.*)/";
        $replacement = "{$keyName}={$newValue}";  
          
        if (preg_match($pattern, $url, $matches)){  
            $newUrl = preg_replace($pattern, $replacement, $url);  
        } else {  
            $sep = count($_GET) == 0 ? "?" : "&";  
            $newUrl = $url . "{$sep}{$replacement}";  
        }
        return $newUrl;  
    }  
}