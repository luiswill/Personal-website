import {html, PolymerElement} from '@polymer/polymer/polymer-element.js';

/**
 * @customElement
 * @polymer
 */
class PresentationElement extends PolymerElement {
  static get template() {
    return html`
      
      <style>
        :host {
          display: block;
          font-family: 'Raleway';

        }

        .intro {
            height: 20vh;
            max-width: 80vw;
            margin: auto;
        }

        h1 {
            font-weight: 700;
        }
      </style>
      <div class="intro">
        <h1>Hi, I am Luis</h1>
        <p>I'm a passionate computer science student.</p>
      </div>
    `;
  }
}

window.customElements.define('intro-presentation', PresentationElement);
