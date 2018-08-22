import {html, PolymerElement} from '@polymer/polymer/polymer-element.js';
import '@polymer/iron-image';


/**
 * @customElement
 * @polymer
 */
class TeaserElement extends PolymerElement {
    static get template() {
      return html`
        <style>
            :host {
            }

            h2 {
                color: black;
            }

            .teaser {
                position: relative;
                display: inline-block;
                width: 100%;
            }

            @media screen and (min-width: 600px) {
                .teaser {
                    width: 49%;
                }
            }  

            @media screen and (min-width: 800px) {
                .teaser {
                    width: 33%;
                    margin-right: -2px;
                }
            }  

            .teaser:hover {
                cursor: pointer;
            }

            .teaser:hover .teaser__backgroundOverlay {
                background-color: rgba(255, 255, 255, 0.3);
            }

            .teaser:hover .teaser__headline {
                opacity: 1;
            }

            .teaser__headline {
                position: absolute;
                z-index: 1;
                left: 50%;
                top: 37%;
                transform: translate(-50%, -50%);
                z-index: 1;
                font-size: 50px;
                opacity: 0;
                transition: opacity 0.4s;
            }

            .teaser__backgroundOverlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 99%;
                background-color: rgba(255, 255, 255, 0);
                transition: background-color 0.3s;
            }

            iron-image {
                height: 400px;
                width: 100%;
            }
        </style>
        <div class="teaser">
            <h2 class="teaser__headline">[[title]]</h2>
            <iron-image src="[[imgSource]]" placeholer="[[imgPlaceholder]]" fade sizing="cover"></iron-image>
            <div class="teaser__backgroundOverlay"></div>
        </div>
      `;
    }
    static get properties() {
      return {
        title: {
          type: String
        },
        imgSource: {
            type: String
        },
        imgPlaceholder: {
            type: String
        }
      };
    }
  }
  
  window.customElements.define('my-teaser', TeaserElement);
  