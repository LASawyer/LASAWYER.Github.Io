using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DamageFrame : MonoBehaviour
{
    public SpriteRenderer spriteRenderer;
    public Color color;
    private bool TakeDamage = false, resetingSprite = false;
    [SerializeField] private LayerMask whatIsBullet;

    public void Update()
    {
        if(TakeDamage == true && resetingSprite == false)
        {
            resetingSprite = true;
            TakeDamage = false;
            spriteRenderer.color = color;
            Invoke(nameof(ResetSprite), 0.2f);
        }
    }

    private void ResetSprite()
    {
        spriteRenderer.color = Color.white;

        resetingSprite = false;
    }
    private void OnCollisionEnter2D(Collision2D Other)
    {
        if(((1 << Other.gameObject.layer) | whatIsBullet) == whatIsBullet)
        {
            TakeDamage = true;
        }
    }
}   
