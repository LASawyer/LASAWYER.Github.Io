using UnityEngine;

public class Character2DController : MonoBehaviour
{
    public float MovementSpeed = 1;
    public float JumpForce = 1;
    float inputHorizontal;
    float inputVertical;

    float shootScale = 1;

    private Rigidbody2D _rigidbody;
    private void Start()
    {
        _rigidbody = GetComponent<Rigidbody2D>();
    }

    private void Update()
    {
        var movement = Input.GetAxis("Horizontal");
        transform.position += new Vector3(movement, 0, 0) * Time.deltaTime * MovementSpeed;

        if(Input.GetButtonDown("Jump") && Mathf.Abs(_rigidbody.velocity.y) <0.001f)
        {
            _rigidbody.AddForce(new Vector2(0, JumpForce) ,ForceMode2D.Impulse);
        }
    }

    private void FixedUpdate()
    {
        inputHorizontal =Input.GetAxis("Horizontal");
        inputVertical = Input.GetAxis("Vertical");
        if(inputHorizontal != 0)
        {
            _rigidbody.AddForce(new Vector2(inputHorizontal * MovementSpeed, 0f));
        }
        if(inputHorizontal > 0)
        {
            gameObject.transform.localScale = new Vector3(1,1,1);

            shootScale = 1;
        }
        if(inputHorizontal < 0)
        {
            gameObject.transform.localScale = new Vector3(-1,1,1);

            shootScale = -1;
        }
    }

    public float GetShootScale() => shootScale;
    
}
    
