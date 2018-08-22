import {html, PolymerElement} from '@polymer/polymer/polymer-element.js';
import '../components/teaserRow/teaserRow.js';
import '../components/intro/intro.js';
import '../components/navigation/navigation.js';

/**
 * @customElement
 * @polymer
 */
class PersonalWebsite extends PolymerElement {
  static get template() {
    return html`
      <style>
        :host {
          display: block;
        }
      </style>
      <my-navigation></my-navigation>
      <intro-presentation></intro-presentation>
      <teaser-row></teaser-row>
    `;
  }
  static get properties() {
    return {
      prop1: {
        type: String,
        value: 'personal-website'
      }
    };
  }
}

window.customElements.define('personal-website', PersonalWebsite);
