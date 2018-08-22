import {html, PolymerElement} from '@polymer/polymer/polymer-element.js';

/**
 * @customElement
 * @polymer
 */
class NavigationElement extends PolymerElement {
  static get template() {
    return html`
      
      <style>
        :host {
          display: block;
          font-family: 'Raleway';
        }
        
        .logo {
            font-size: 25px;
        }

      </style>
      <div class="intro">
            <span class="logo">Luis Willnat</span>

            </ul class="links">
                <li>About</li>
                <li>Contact</li>
            </ul>
      </div>
    `;
  }
}

window.customElements.define('my-navigation', NavigationElement);
